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
                   href="{{ route('product.show', ['id'=> $item->getProduct()->getId()]) }}">
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

    <div class="alert alert-danger" role="alert">
      Seems to be that you have not purchased anything in our store =(.
    </div>
  @endforelse
@endsection
