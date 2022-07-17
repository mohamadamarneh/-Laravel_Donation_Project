@extends('dashbord.indexDD')
@section('title','Single Request')
{{-- @section('messages','active') --}}

{{-- @section('loading')
@include('dashbord.layout.loading')
@endsection --}}

@section('slidbar')
@include('dashbord.layout.slidbar')
@endsection

@section('navbar')
@include('dashbord.layout.nav')
@endsection
@section('typography')




            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="row g-4">
                    <div class="col-sm-12 col-xl-8 pt-4 px-4 " style="margin: 0 auto;">



                        <div class="bg-secondary rounded h-100 p-4 ">
                            @if ($single->status ==0 )



                            <hr>
                                <a class="btn btn-sm btn-primary"  href="{{route('dest',['id'=>$single->id])}}">Reject &nbsp;<i class="fa  fa-ban me-2"></i></a>
                                <a class="btn btn-sm btn-success" href="{{route('editform',['id'=>$single->id])}}">Accept <i class="fa  fa-check me-2"></i></a>
                                <hr>
                           @endif
                            <h6 class="mb-4">Name :{{$single->b_d_name}} </h6>
                            <h6>Gender:{{ $single->b_d_gender }}</h6>
                            <h6>Mobile:{{ $single->b_d_phone }}</h6>
                            @if ($single->status ==0 )
                            <h6>Status: Waiting</h6>

                            @elseif($single->status ==1)
                            <h6>Status: Accepted</h6>
                            @elseif($single->status ==2)
                            <h6>Status: Rejected</h6>
                            @endif

                            <hr>
           <div class="alert  " role="alert" >
            <img src="{{url('public/Image/'.$single->b_d_reprt )}}" alt="" width="100%"   >

            <p></p>
            <hr>

            {{-- <p class="mb-0">message:</p> --}}
          </div>


                        </div>

                    </div>  </div>
            </div>





@endsection

@section('copyright')
@include('dashbord.layout.copyright')
@endsection
