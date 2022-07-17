@extends('layout.main')
@section('title')
    Login
@endsection

@section('content')

<div class="container mt-5" style="margin-top: 50px ;">
@if (isset($m) )

<div class="alert alert-primary" role="alert">
@php
   echo $m;
@endphp
</div>

@endif
@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
@endif
<form action="check" method="POST" enctype="multipart/form-data">
@csrf
    <!-- Text input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example3">Email </label>
      <input type="email" id="form6Example3" class="form-control"  name="Email"/>
    </div>
    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example3">Password </label>
      <input type="password" id="form6Example3" class="form-control"  name="password"/>
    </div>

    <button type="submit" class="btn btn-primary btn-block mb-4">Regester Now </button>
  </form>

     </div></div>

@endsection
=======
    <div class="container mt-5" style="margin-top: 50px ;">
      @if (isset($m) )

      <div class="alert alert-primary" role="alert">
      @php
         echo $m;
      @endphp
      </div>

      @endif
      @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div><br />
      @endif
      <form action="check" method="POST" enctype="multipart/form-data">
      @csrf
          <!-- Text input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form6Example3">Email </label>
            <input type="email" id="form6Example3" class="form-control"  name="Email"/>
          </div>
          <div class="form-outline mb-4">
            <label class="form-label" for="form6Example3">Password </label>
            <input type="password" id="form6Example3" class="form-control"  name="password"/>
          </div>
          <p>No account yet? <a href="/doner" style="btn btn-primary btn-block mb-4">Sign up!</a></p>






          <button type="submit" class="btn btn-primary btn-block mb-4">Regester Now </button>
        </form>






     </div></div>

@endsection

