<p class="card-text">
<form method="POST" action="{{ route('cart.add', ['id'=> $viewData['product']->getId()]) }}">
    <div class="row">
        @csrf
        <div class="col-auto">
            <div class="input-group col-auto">
                <div class="input-group-text">Quantity</div>
                <input type="number" min="1" max="10" class="form-control quantity-input"
                       name="quantity" value="1">
            </div>
        </div>
        <div class="col-auto">
            <button class="btn bg-primary text-white" type="submit">Add to cart</button>
        </div>
    </div>
</form>
</p>


<div class="p-t-33">
    <form action="{{ route('cart.add', ['id', $viewData['product']->getId()]) }}" method="POST">
        <div class="flex-w flex-r-m p-b-10">
            <div class="size-204 flex-w flex-m respon6-next">
                <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                        <i class="fs-16 zmdi zmdi-minus"></i>
                    </div>
                    <input class="mtext-104 cl3 txt-center num-product" type="number"
                           name="num-product" value="1">
                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                        <i class="fs-16 zmdi zmdi-plus"></i>
                    </div>
                </div>
                @csrf
                <button
                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail"
                    type="submit">
                    Add to cart
                </button>
            </div>
        </div>
    </form>
</div>

<td>
    <div class="wrap-num-product flex-w m-r-20 m-tb-10">
        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
            <i class="fs-16 zmdi zmdi-minus"></i>
        </div>
        <input class="mtext-104 cl3 txt-center num-product" type="number"
               name="quantity" value="{{ session('products')[$product->getId()] }}">
        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
            <i class="fs-16 zmdi zmdi-plus"></i>
        </div>
    </div>
</td>
