@extends('layouts.apps')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
  <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('/../images/bg-05.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
      My Orders
    </h2>
  </section>

  @forelse ($viewData["orders"] as $order)
    <div class="card mb-4">
      <div class="card-header">
        Order #{{ $order->getId() }}
      </div>
      <div class="card-body">
        <b>Date:</b> {{ $order->getCreatedAt() }}<br/>
        <b>Total:</b> ${{ $order->getTotal() }}<br/>
        <table class="table table-bordered table-striped text-center mt-3">
          <thead>
          <tr>
            <th scope="col">Item ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($order->getItems() as $item)
            <tr>
              <td>{{ $item->getId() }}</td>
              <td>
                <a class="link-success text-decoration-none"
                   href="{{ route('product.show', ['slug'=> $item->getProduct()->getSlug()]) }}">
                  {{ $item->getProduct()->getName() }}
                </a>
              </td>
              <td>${{ $item->getPrice() }}</td>
              <td>{{ $item->getQuantity() }}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  @empty

    <div class="alert d-flex flex-column justify-content-center align-items-center" role="alert">
      <h2>Kamu belum pernah bertransaksi :(</h2><br>
      <p>Ayo, mulai belanja dan beli berbagai kain favoritmu di Kastara!</p><br>
      <a href="/products"
        class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 text-center btn-sm m-b-20"
        style="max-width: 200px; min-width: 100px; text-decoration: none;">
        Shop Now
      </a>
    </div>
  @endforelse
@endsection
