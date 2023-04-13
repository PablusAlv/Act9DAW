@extends('layout')
@section('title', 'Registration')
@section('content')
    <div class="container">
        <div class="mt-5">
            @if($errors->any())
                <div class="col-12">
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                </div>
            @endif
            @if(session()->has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif
            @if(session()->has('succ'))
                <div class="alert alert-success">{{session('succ')}}</div>
            @endif
        </div>
        <form action="{{route('regis.post')}}" method="POST" class="ms-auto me-auto mt-5" style="width: 200px">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                <div id="emailHelp" class="form-text">Your email adress is safe with us, trust us</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputName1" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="exampleInputName1" name="name">
                <div id="emailHelp" class="form-text">Your name is also safe, we swear</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
@endsection