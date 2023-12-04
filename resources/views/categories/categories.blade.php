@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
    <div class="row">
        @foreach ($viewData["category"] as $category)
           <ul>
               <li>
                   <h2 href="/categories/{{ $category->name }}">{{ $category->name }}</h2>
               </li>
           </ul>
        @endforeach
    </div>
@endsection
