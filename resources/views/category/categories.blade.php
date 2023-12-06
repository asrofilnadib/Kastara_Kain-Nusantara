@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
    <div class="row">
        @foreach ($viewData["category"] as $category)
           <ul>
               <li>
                   <h2><a href="/categories/{{ $category->id }}">{{ $category->name }}</a></h2>
               </li>
           </ul>
        @endforeach
    </div>
@endsection
