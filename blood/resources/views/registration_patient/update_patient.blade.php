@extends('layout.main')
@section('title')
    profile
@endsection
@section('content')

<div class="container">
  <div class="row">
    <div class="col"></div>
    <div class="col-7">
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
        <form action="{{route('patient.update', $user->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <!-- Text input -->
            <div class="form-outline mb-4">
              <input type="text" id="form6Example3" class="form-control"  name="b_d_n_name" value="{{$user->b_d_n_name}}"/>
              <label class="form-label" for="form6Example3">Name </label>
            </div>

          <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
              <div class="col">
                <div class="form-outline">

                <select class="form-select" name="b_d_n_gender" value="{{$user->b_d_n_gender}}" >
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>

                  <label class="form-label" for="form6Example1">Gender</label>
                </div>
              </div>

              <div class="col">
                <div class="form-outline">
                  <select class="form-select" name="b_d_blood_type" value="{{$user->b_d_blood_type }}">
                    @foreach ($blood as $item)

                    <option value="{{$item->id}}">{{$item->name}}</option>

                    @endforeach
                     </select>
                  <label class="form-label" for="form6Example2">Blood Type</label>
                </div>
              </div>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
              <select class="form-select" name="b_d_n_age" value="{{$user->b_d_n_age}}">
                @for ($i = 18; $i < 65 ; $i++)

                <option value="{{$i}}">{{$i}}</option>

                @endfor
            </select>      <label class="form-label" for="form6Example4">age</label>
            </div>

            <div class="row mb-4" >
              <div class="col">
              <select class="form-select" name="b_d_n_address" value="{{$user->b_d_n_address}}">
                <option value="Irbid">Irbid</option>
                <option value="Amman">Amman</option>
                <option value="Jarsh">Jarsh</option>
                <option value="Blqa">Blqa</option>
                <option value="Karak">Karak</option>
                <option value="Zarqa">Zarqa</option>
                <option value="Maan">Maan</option>
                <option value="Mafraq">Mafraq</option>
                <option value="Tafelah">Tafelah</option>
                <option value="Madaba">Madaba</option>
                <option value="Ajloun">Ajloun </option>
                <option value="Ajloun">Aqaba </option>
            </select>
              <label class="form-label" for="form6Example4">Address</label>
          </div>
          <div class="col">
              <input type="text" id="form6Example4" class="form-control" placeholder="07xxxxxxxx" name="b_d_phone" value="{{$user->b_d_phone}}"/>
              <label class="form-label" for="form6Example4">Phone</label>
            </div>
            </div>




            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form6Example5" class="form-control" name="b_d_n_email" value="{{$user->b_d_n_email}}"/>
              <label class="form-label" for="form6Example5">Email</label>
            </div>

            <!-- password input -->
            <div class="form-outline mb-4">
              <input type="password" id="form6Example5" class="form-control" name="b_d_n_password" value="{{$user->b_d_n_password}}"/>
              <label class="form-label" for="form6Example5">Password</label>
            </div>


            <button type="submit" class="btn btn-primary btn-block mb-4">Edit </button>
          </form>

             </div>
    </div>
    <div class="col"></div>
  </div>
</div>




@endsection
