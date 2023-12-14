@extends('layouts.apps')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
@include('sweetalert::alert')
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('/../images/bg-04.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
      Cart
    </h2>
  </section>
<div class="card">
  <div class="card-header">
    Purchase Completed
  </div>
  <div class="card-body">
    <div class="alert alert-success" role="alert">
      Congratulations, purchase completed. Order number is <b>#{{ $viewData["order"]->getId() }}</b>
    </div>
  </div>
</div>
@endsection
