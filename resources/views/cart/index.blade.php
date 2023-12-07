@extends('layouts.apps')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('/../images/bg-04.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
      Cart
    </h2>
  </section>

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
