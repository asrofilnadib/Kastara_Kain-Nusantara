@extends('layouts.apps')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

  <section class="bg0 p-t-23 p-b-20">
    <div class="container">
      @if($viewData['products']->count())
        <div class="row isotope-grid">
          @foreach($viewData['products'] as $product)
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
              <!-- Block2 -->
              <div class="block2">
                <div class="block2-pic hov-img0">
                  <img src="/storage/{{ $product->getImage() }}" alt="IMG-PRODUCT">
                </div>

                <div class="block2-txt flex-w flex-t p-t-14">
                  <div class="block2-txt-child1 flex-col-l ">
                    <a href="{{ route('product.show', ['id' => $product->getId()]) }}"
                       class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                      {{ $product->getName() }}
                    </a>

                    <span class="stext-105 cl3">
									${{$product->getPrice()}}
								</span>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>

      @else
        <div class="col-md-4 col-lg-3 mb-2 d-flex justify-content-center">Product Not Found.</div>
      @endif

      <div class="d-flex justify-content-end">
        {{ $viewData['products']->links() }}
      </div>
    </div>
  </section>

  {{--<div class="row justify-content-center">
    <div class="col-md-4 col-lg-2 mb-2">
      <form action="/products">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
          <button class="btn btn-outline-secondary" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>--}}

@endsection
