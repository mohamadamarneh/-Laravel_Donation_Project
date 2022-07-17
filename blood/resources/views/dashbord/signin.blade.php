@extends('dashbord.indexDD')
@section('title','Login ')


@section('loading')
@include('dashbord.layout.loading')
@endsection


        <!-- Sign In Start -->
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
                            <h3>Sign In</h3>
                        </div>
                        <form action="{{route('checkAdmin')}}" method="post">
                            @csrf
                        <div class=" mb-3"><label >Email address</label>
                            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">

                        </div>
                        <div class=" mb-4"><label >Password</label>
                            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">

                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                {{-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label> --}}
                            </div>
                            {{-- <a href="">Forgot Password</a> --}}
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Log In</button>
                        {{-- <p class="text-center mb-0">Don't have an Account? </p> --}}
                    </div>
                </div>
            </form>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    @section('copyright')

    @include('dashbord.layout.copyright')



    @endsection
