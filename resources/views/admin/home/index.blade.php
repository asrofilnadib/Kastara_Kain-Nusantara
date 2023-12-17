@php use App\Models\User;use Illuminate\Support\Facades\Auth; @endphp
@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
  <div class="card">
    <div class="page-breadcrumb">
      <div class="row">
        <div class="col-7 align-self-center">
          <h3
            class="page-title text-truncate text-dark font-weight-medium mb-1"
          >
            Good Morning, {{ Auth::user()->orders()->with('user')->get()->pluck('user.name')->unique()->implode(', ')}}!
          </h3>
          <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb m-0 p-0">
                <li class="breadcrumb-item">
                  <a href="{{ route('admin.home.index') }}">Order Table</a>
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="col-5 align-self-center">
        </div>
      </div>
    </div>


    <div class="card-body">
      <div class="table-responsive">
        <table id="zero_config" class="table table-striped table-bordered no-wrap display">
          <thead>
          <tr class="table_head">
            <th>ID</th>
            <th>Name</th>
            <th>Total</th>
          </tr>
          </thead>
          <tbody>
          @foreach($viewData['order'] as $order)
            <tr class="table_row">
              <td>{{ $order->id }}</td>
              <td>{{ $order->user->name }}</td>
              <td>${{ $order->total}}</td>
            </tr>
          @endforeach
          </tbody>
          <tfoot>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Total</th>
          </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function () {
      $('#zero_config').DataTable()
    })
  </script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

@endsection
