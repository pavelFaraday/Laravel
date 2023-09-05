@extends('layouts.master')
@section('content')
  <main role="main" class="container">
    <h1 class="mt-5 text-danger">Home</h1>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ratione quaerat vero a, ullam reiciendis earum distinctio nihil exercitationem quidem neque odit aliquid quasi esse, repudiandae, adipisci non placeat.

    <div class="row mt-5">
      @foreach ($blogs as $blog)
        @if ($blog['status'] == 1)
          <div class="col-md-4">
            <div class="card mt-5">
              <div class="card-body">
                <h2>{{ $blog['title'] }}</h2>
                <p>{{ $blog['body'] }}</p>
                <div class="btn btn-sm btn-info">LIKE</div>
              </div>
            </div>
          </div>
          @else
          <div class="col-md-4">
            <div class="card mt-5">
              <div class="card-body">
                <h2>{{ $blog['title'] }}</h2>
                <p>{{ $blog['body'] }}</p>
                <div class="btn btn-sm btn-warning">Read More</div>
              </div>
            </div>
          </div>
        @endif
      @endforeach
    </div>

    @php
      echo 'Hello World';
      $data = true;
      $numb = 2;
      $secondNumb = '';
    @endphp

    @isset($data)
      <div class="alert alert-success mt-5">Success</div>
    @endisset

    @switch($numb)
      @case(1)
      <div class="alert alert-danger mt-5">Danger</div>
        @break
      @case(2)
      <div class="alert alert-info mt-5">Info</div>
        @break
      @default
      <div class="alert alert-warning mt-5">Warning</div>
    @endswitch




  </main>
@endsection
