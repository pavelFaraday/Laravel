@extends('layouts.master')
@section('content')
  <main role="main" class="container">
    {{-- localhost/Laravel-Udemy/public/storage/images/myimage.png --}}
    <img src="{{ asset('/storage/images/myimage.png') }}"> 
   <div class="col-md-4">
    <div class="card mt-5">
      <div class="card-body">
        <form action="{{ route('upload-file') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label class="mb-3" for="">Upload</label>
            <input type="file" name="image" class="form-control">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-success mt-2">Submit</button>
          </div>
        </form>
      </div>
    </div>
   </div>
  </main>
@endsection
