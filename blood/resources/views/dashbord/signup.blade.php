@extends('dashbord.indexDD')
@section('title', 'Sign Up')


{{-- @section('loading')
@include('dashbord.layout.loading')
@endsection --}}
<!-- Sign Up Start -->
<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <a href="index.html" class="">
                        <h3 class="text-primary"><i class="fa fa-user me-2"></i>Life Line</h3>
                    </a>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Sign Up</h3>
                </div>
                <form action="{{ route('storeAdmin') }}" method="post">
                    @csrf
                    <div class=" mb-3">
                        <label >Username</label>
                        <input type="text" class="form-control" name="name" placeholder="jhondoe">

                        @error('name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class=" mb-3"><label>Phone Number</label>
                        <input type="text" class="form-control" name="phone"
                            placeholder="07xxxxxxxx please enter your phone number">

                        @error('phone')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class=" mb-4">
                        <label for="floatingPassword">Email </label>
                        <input type="email" class="form-control" name="email" placeholder="name@example.com">

                        @error('email')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <input type="hidden" name="roll" value="2">

                    <div class=" mb-4">
                        <label >Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">

                        @error('password')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="form-check">
                            {{-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> --}}
                            {{-- <label class="form-check-label" for="exampleCheck1">Check me out</label> --}}
                        </div>
                        {{-- <a href="">Forgot Password</a> --}}
                    </div>
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                    {{-- <p class="text-center mb-0">Already have an Account? <a href="">Sign In</a></p> --}}
            </div>
        </div>
        </form>
    </div>
</div>
<!-- Sign Up End -->
</div>

@section('copyright')

    @include('dashbord.layout.copyright')



@endsection
