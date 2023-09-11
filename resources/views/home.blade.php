@extends('layouts.master')
@section('content')
  <main role="main" class="container">
    <div class="col-md-4">
     @if ($errors->any())
       @foreach ($errors->all() as $error)
           <div class="alert alert-danger">
               {{ $error }}
           </div>
       @endforeach
     @endif
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
