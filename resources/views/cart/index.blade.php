@extends('layouts.apps')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
  <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('/../images/bg-04.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
      Cart
    </h2>
  </section>

  <!-- Shoping Cart -->
  <form class="bg0 p-t-75 p-b-85" method="post">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
          <div class="m-l-25 m-r--38 m-lr-0-xl">
            <div class="wrap-table-shopping-cart">
              <table class="table-shopping-cart">
                <tr class="table_head">
                  <th class="column-1">Product</th>
                  <th class="column-2"></th>
                  <th class="column-3">Price</th>
                  <th class="column-4">Quantity</th>
                  <th class="column-5">Total</th>
                </tr>
                @foreach($viewData['products'] as $product)
                  <tr class="table_row">
                    <td class="column-1">
                      <div class="how-itemcart1">
                        <img src="/../storage/{{ $product->getImage() }}" alt="IMG">
                      </div>
                    </td>
                    <td class="column-2">{{ $product->getName() }}</td>
                    <td class="column-3">$ {{ $product->getPrice() }}</td>
                    <td class="column-4">
                      {{ session('products')[$product->getId()]}}
                      {{--<div class="wrap-num-product flex-w m-l-auto m-r-0">
                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                          <i class="fs-16 zmdi zmdi-minus"></i>
                        </div>

                        <input class="mtext-104 cl3 txt-center num-product" type="number" name="#" value="{{ session('products')[$product->getId()]}}" min="1">

                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                          <i class="fs-16 zmdi zmdi-plus"></i>
                        </div>
                      </div>--}}
                    </td>
                    <td class="column-5">$ {{ $product->getPrice() * session('products')[$product->getId()] }}</td>
                  </tr>
                @endforeach
              </table>
            </div>
          </div>
        </div>

        <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
          <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
            <h4 class="mtext-109 cl2 p-b-30">
              Cart Totals
            </h4>

            <div class="flex-w flex-t p-t-27 p-b-33">
              <div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
              </div>

              <div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
									${{ $viewData['total'] }}.00
								</span>
              </div>
            </div>

            @if( count($viewData['products']) > 0)
                <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                  <a href="{{ route('cart.purchase') }}" class="text-decoration-none flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                  Proceed to Checkout
                  </a>
                </button>

              <a href="{{ route('cart.delete') }}" class="text-decoration-none">
                <div class="flex-w p-t-25">
                  <div class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">
                    Remove all product
                  </div>
                </div>
              </a>
            @endif
          </div>
        </div>
      </div>
    </div>
  </form>


  <div class="card">
    <div class="card-header">
    </div>
    <div class="card-body">
      <table class="table table-bordered table-striped text-center">
        <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Price</th>
          <th scope="col">Quantity</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($viewData["products"] as $product)
          <tr>
            <td>{{ $product->getId() }}</td>
            <td>{{ $product->getName() }}</td>
            <td>${{ $product->getPrice() }}</td>
            <td>{{ session('products')[$product->getId()] }}            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <div class="row">
        <div class="text-end">
          <a id="totalPayment" class="btn btn-outline-secondary mb-2"><b>Total to pay:</b> ${{ $viewData["total"] }}</a>
          @if (count($viewData["products"]) > 0)
            <a href="{{ route('cart.purchase') }}" class="btn bg-primary text-white mb-2">Purchase</a>
            <a href="{{ route('cart.delete') }}">
              <button class="btn btn-danger mb-2">
                Remove all products from Cart
              </button>
            </a>
          @endif
        </div>
      </div>
    </div>
  </div>
@endsection
