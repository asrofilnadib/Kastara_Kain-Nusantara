<?php

    namespace App\Http\Controllers;

    use App\Models\Product;
    use App\Models\Order;
    use App\Models\Item;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $total = 0;
        $productsInCart = [];

        $productsInSession = $request->session()->get("products");
        if ($productsInSession) {
            $productsInCart = Product::findMany(array_keys($productsInSession));
            $total += Product::sumPricesByQuantities($productsInCart, $productsInSession);
        }

        $cartCount = count($productsInCart);
        $request->session()->put('cartCount', $cartCount);

        $viewData = [
          'title' => "Cart - Online Store",
          'subtitle' => "Shopping Cart",
          'total' => $total,
          'products' => $productsInCart
        ];
        return view('cart.index', compact('cartCount'))->with("viewData", $viewData);
    }

    public function add(Request $request, $id)
    {
        if (Auth::check()) {
            $products = $request->session()->get("products", []);

            if (isset($products[$id])) {
                $products[$id] += $request->input('quantity');
            } else {
                $products[$id] = $request->input('quantity');
            }
            $request->session()->put('products', $products);
        } else {
            return redirect()->route('login')->with('error', 'Please log in to add products to the cart.');
        }
        Alert::success('', 'Your item is added to cart!');
        return view('cart.index');
    }

    public function delete(Request $request)
    {
        $request->session()->forget('products');
        return back();
    }

    public function purchase(Request $request)
    {
        $productsInSession = $request->session()->get("products");
        if ($productsInSession) {
            $userId = Auth::user()->getId();
            $order = new Order();
            $order->setUserId($userId);
            $order->setTotal(0);
            $order->save();

            $total = 0;
            $productsInCart = Product::findMany(array_keys($productsInSession));
            foreach ($productsInCart as $product) {
                $quantity = $productsInSession[$product->getId()];
                $item = new Item();
                $item->setQuantity($quantity);
                $item->setPrice($product->getPrice());
                $item->setProductId($product->getId());
                $item->setOrderId($order->getId());
                $item->save();
                $total += ($product->getPrice() * $quantity);
            }
            $order->setTotal($total);
            $order->save();

            $newBalance = Auth::user()->getBalance() - $total;
            Auth::user()->setBalance($newBalance);
            Auth::user()->save();

            $request->session()->forget('products');

            $viewData = [];
            $viewData["title"] = "Purchase - Online Store";
            $viewData["subtitle"] = "Purchase Status";
            $viewData["order"] = $order;
            Alert::success('Thanks for order!', 'Your transaction is successful.');
            return view('cart.purchase')->with("viewData", $viewData);
        }
        return redirect()->route('cart.purchase');
    }

    public function update(Request $request, $id)
    {
        $product = $request->session()->get('product');
        $product[$id] = $request->input('quantity');
        $request->session()->put('product', $product);
        return redirect()->route('cart.index');
    }
}
