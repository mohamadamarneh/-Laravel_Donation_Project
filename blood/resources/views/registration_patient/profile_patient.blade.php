@extends('layout.main')
@section('title')
    title of the page
@endsection
@section('content')
@php
    $arr=["A+","A-","B-","B+","AB-","AB+","O-","O+"]
@endphp

<!-- About Start -->
<div class="container-xxl py-6">
    <div class="fluid-container">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/thank1.jpeg" alt="" style="object-fit: cover;">


                </div>
            </div>
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s"  style="text-align:center;">
                <div class="h-100">

                    <h1 class="display-6 mb-4">Welcome   {{$user->b_d_n_name}} </h1>
                    <p>"Your blood is replaceable. A life is not.”
                    </p>
                    <p class="mb-4"> Our passion is to show you all support  we can afford, Ahyaha lives in providing you all you need.


                    </p>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<!-- Page Header End -->
 <div class="container">
    <div class="main-body">



          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="img/donor (1).png" alt="Admin"  width="150">
                    <div class="mt-3">
                      <h4> {{$user->b_d_n_name}}</h4>
                      <p class="text-secondary mb-1">Patient</p>
                      <p class="text-muted font-size-sm">{{$user->b_d_n_address}}</p>


                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$user->b_d_n_name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$user->b_d_n_email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$user->b_d_n_phone}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$user->b_d_n_gender}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       {{$user->b_d_n_address}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                        <a class="btn btn-primary " target="__blank" href="doneredit">Edit</a>

                    </div>
                  </div>
                </div>
              </div>
                <div class="container" style="margin-top:30px;">
                    <h1>Donors information</h1><br><br>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Blood type</th>
                        <th scope="col">Phone number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($doner as $i=> $d)
                 @if ($d->status)


                    <tr>
                        <th scope="row">{{++$i}}</th>
                        <td>{{$arr[$d->b_d_blood_type-1]}}</td>
                        <td>{{$d->b_d_phone}}</td>
                        <td>{{$d->b_d_email}}</td>
                        <td>{{$d->b_d_address}}</td>
                        <td><form action="{{route('request.store')}}" method="post">
                          @csrf
                        <input type="hidden"  value="{{$d->id}}"  name="b_d_id">
                        <input type="hidden"  value="{{$user->id}}"  name="b_d_n_id">
                        <input type="hidden"  value="0" name="status">
                        <input type="hidden"  value="@php echo date("F j, Y, g:i a");  @endphp" name="request_date">
                        <input type="submit" class="btn btn-success"   value="request doner">
                        </form></td>
                      </tr>


                 @endif
                 @php

                       $op =true;

                 @endphp
            @endforeach

                    </tbody>
                  </table>
                </div>
              </div>



            </div>
          </div>

        </div>



@endsection

