@extends('layouts.apps')
@section('title', $viewData["title"])
@section('content')
  <section class="bg0 p-t-15 p-b-25">
    <div class="container">
      <div class="p-t-65">
        <h4 class="mtext-112 cl5 p-b-33">
          Produk Dari Pulau {{ $viewData['category'] }}
        </h4>

        <ul>
          @foreach( $viewData['products'] as $products)
            <li class="flex-w flex-t p-b-30">
              <a href="/products/{{ $products->id }}" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
                <img src="/storage/{{ $products->image }}" alt="PRODUCT" class="w-100" style="width: 160px">
              </a>

              <div class="size-215 flex-col-t p-t-8">
                <a href="/produucts/{{ $products->id }}" class="stext-116 cl8 hov-cl1 trans-04 text-decoration-none">
                  {{ $products->name }}
                </a>

                <span class="stext-116 cl6 p-t-20">
											${{ $products->price }}.00
										</span>
              </div>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </section>
@endsection
