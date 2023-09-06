@extends('layouts.master')

@section('content')
    <div class="row mt-5 justify-content-center">
        <div class="col-md-4">
            
            <div class="card-body">
                <h2 class="mb-5">Login Fom</h2>
                <form action="{{route('login.submit')}}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label for="" class="form-label">User Name</label>
                        <input name="name" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">User Email</label>
                        <input name="email" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">User Password</label>
                        <input name="password" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
