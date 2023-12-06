@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
    <h1 class="mb-5 fs-6">Category: </h1>
        @foreach ( $viewData["products"] as $products )
            <section>
                <h2>
                    <a href="/products/{{ $products->id }}">{{ $products->name }}</a>
                </h2>
                <p>{{ $products->excerpt }}</p>
            </section>
        @endforeach
@endsection
