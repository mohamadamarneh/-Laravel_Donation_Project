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
        <form action="{{route('doner.update', $user->id)}}" method="POST" enctype="multipart/form-data">
        @csrf 
        @method('PUT') 
            <!-- Text input -->
            <div class="form-outline mb-4">
              <input type="text" id="form6Example3" class="form-control"  name="b_d_name" value="{{$user->b_d_name}}"/>
              <label class="form-label" for="form6Example3">Name </label>
            </div>
        
          <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
              <div class="col">
                <div class="form-outline">
        
                <select class="form-select" name="b_d_gender" value="{{$user->b_d_gender}}" >
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
        
                  <label class="form-label" for="form6Example1">Gender</label>
                </div>
              </div>
        
              <div class="col">
                <div class="form-outline">
                  <select class="form-select" name="b_d_blood_type" value="{{$user->b_d_blood_type}}">
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
              <select class="form-select" name="b_d_age" value="{{$user->b_d_age}}">
                @for ($i = 18; $i < 65 ; $i++)
        
                <option value="{{$i}}">{{$i}}</option>
                    
                @endfor
            </select>      <label class="form-label" for="form6Example4">age</label>
            </div>
        
            <div class="row mb-4" >
              <div class="col">
              <select class="form-select" name="b_d_address" value="{{$user->b_d_address}}">
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
        
            
          
          
     
              {{-- <input type="hidden"  name="b_d_reprt" value="{{$user->b_d_reprt}}"/>

              <input type="hidden"  id="form6Example5" class="form-control" name="b_d_email" value="{{$user->b_d_email}}"/>
            <input type="hidden"  name="b_d_password" value="{{$user->b_d_password}}"/>
            <input type="hidden"  name="status"  value="{{$user->status}}"/> --}}
        
            <!-- password-confirm  input -->
            {{-- <div class="form-outline mb-4">
              <input type="password" id="form6Example5" class="form-control"  />
              <label class="form-label" for="form6Example5">Confirm Password</label>
            </div> --}}
          
          
          
            {{-- <!-- Message input -->
            <div class="form-outline mb-4">
              <textarea class="form-control" id="form6Example7" rows="4"></textarea>
              <label class="formw-label" for="form6Example7">Additional information</label>
            </div> --}}
          
            {{-- <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">
              <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
              <label class="form-check-label" for="form6Example8"> Create an account? </label>
            </div>
           --}}
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Edit </button>
          </form>
        
             </div>
    </div>
    <div class="col"></div>
  </div>
</div>


     

@endsection