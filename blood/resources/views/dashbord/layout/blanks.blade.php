
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
{{-- @foreach ($message as $item) --}}
                <div class="row g-12">
                    <div class="col-sm-12 col-xl-6">



                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4"></h6>

           <div class="alert alert-secondary " role="alert">
            <h4 class="alert-heading">Admin name:{{$userAdmin->name}}</h4>
            <p></p>
            <hr>
            <h6 class="mb-0" style="color:black">Mobile Number:{{$userAdmin->phone}}</h6>
            <hr>
            <h6 class="mb-0" style="color:black">Email:{{$userAdmin->email}}</h6>
          </div>


                        </div>

                    </div>  </div>
            </div>
@if ($userAdmin->roll==1)


            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">All Admins</h6>

                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    {{-- <th scope="col"><input class="form-check-input" type="checkbox"></th> --}}

                                    <th scope="col">Name</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Created Date</th>

                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach ($allAdmins as $item)

<tr>
                                    <td>
                                        {{$item->name}}
                                    </td>
                                    <td>
                                        {{$item->phone}}
                                    </td>
                                    <td>
                                        {{$item->email}}
                                    </td>
                                    <td>
                                        {{$item->created_at}}
                                    </td>
                                    @if ($item->roll !=1)

{{-- @break --}}
                                    <td>







                                        <a class="btn btn-sm btn-primary" href="{{route('del',['id'=>$item->id])}}">Delete Admin</a>

                                    </td>
                                    @else
                                    <td>Admin</td>
                                     @endif
                                </tr>
{{--
                                        <td>{{ $item->b_d_name }}</td>
                                        <td>{{ $item->b_d_email }}</td>
                                        <td>{{ $item->b_d_gender }}</td>
                                        <td>{{ $item->b_d_phone }}</td>
                                        <td>{{ $item->b_d_reprt }}</td>
                                        <td>{{ $item->b_d_age }}</td>
                                        <td>{{ $item->name }}</td>
                                        @if ($item->status ==0 )
                                              <td>Waiting</td>

                                              @elseif($item->status ==1)
                                              <td>Accepted</td>
                                              @elseif($item->status ==2)
                                              <td>Rejected</td>
                                              @endif
                                         @if ($item->status ==0 )
                                            <td>



                                                <a class="btn btn-sm btn-primary" href="{{route('dest',['id'=>$item->id])}}">Reject</a>
                                                <a class="btn btn-sm btn-success" href="{{route('editform',['id'=>$item->id])}}">Accept</a>
                                            </td>
                                           @endif



                                    </tr>
                                    @endif--}}
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endif
