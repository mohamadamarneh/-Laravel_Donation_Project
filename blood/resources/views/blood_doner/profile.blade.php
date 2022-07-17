@extends('layout.main')
@section('title')
    title of the page
@endsection
@section('content')
@php
    $arr=["A+","A-","B-","B+","AB-","AB+","O-","O+"]
@endphp



<


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

                        <h1 class="display-6 mb-4">Thank You! </h1>
                        <p>Ahyaha sent to new donor thank you letter to  donor who had just givea blood.
                        </p>
                        <p class="mb-4"> We are thrilled to have your support. Through your donation we have been able to accomplish goal and continue working towards purpose of organization. You truly make the difference for us, and we are extremely grateful!
                            Today your donation is going toward problem. If you have specific questions about how your gift is being used or our organization as whole, please don’t hesitate to contact to us through .


                        </p>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
<div class="container mt-5" >
    <div class="main-body">

          <div class="row gutters-sm">
            <div class="col-lg-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="img/do2.png" alt="Admin"  width="150">
                    <div class="mt-3">
                      <h4> {{$user->b_d_n_name}}</h4>
                      <p class="text-secondary mb-1">Donor</p>
                      <p class="text-muted font-size-sm">{{$user->b_d_n_address}}</p>


                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-lg-6">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$user->b_d_name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$user->b_d_email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$user->b_d_phone}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$user->b_d_gender}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       {{$user->b_d_address}}
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
    </div>
                <div class="container-fluid" style="margin-top:30px;">
                    <h1> Donors request </h1><br><br>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Blood type</th>
                        <th scope="col">Phone number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>

                      @php
                      $i=0;
                      $op=false;
                      @endphp
                      @foreach ($needed as $b)
                                @foreach ($req as $r)
                                   @if ($r->b_d_n_id == $b->id && $user->id == $r->b_d_id )
                                   @php

                                   $op=true ;
                                   @endphp
                                   @endif
                                   @if ($op && !$r->status)
                                <tr>
                                  <th scope="row">{{++$i}}</th>
                                  <td>{{$b->b_d_n_name}}</td>
                                  <td>{{$blood[$b->b_d_n_blood_type]['name']}}</td>
                                  <td>{{$b->b_d_n_phone}}</td>
                                  <td>{{$b->b_d_n_email}}</td>
                                  <td>{{$b->b_d_n_address}}</td>
                                  <td><form action="{{route('request.update', $r->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="1">
                                    <input type="submit" class="btn btn-success" value="acceapet">
                                  </form></td>
                                            <td><form action="{{route('request.update', $r->id)}}" method="post">
                                              @csrf
                                              @method('PUT')
                                            <input type="hidden" name="status" value="2">
                                            <input type="submit" class="btn btn-danger" value="reject">
                                          </form></td>
                                          </tr>
                                            @endif
                                          @php

                                          $op=false ;
                                          @endphp
                                          @endforeach

                                          @endforeach

                    </tbody>
                  </table>
                </div>
              </div>



            </div>


        </div>
    </div>



@endsection

