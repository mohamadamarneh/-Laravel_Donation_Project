  <!-- blood_doners -->
{{-- {{
session([$bds => 'value'])}} --}}

  <div class="container-fluid pt-4 px-4">
      <div class="bg-secondary text-center rounded p-4">
          <div class="d-flex align-items-center justify-content-between mb-4">
              <h6 class="mb-0">Blood Doners Request</h6>
              <a href="">Show All</a>
          </div>
          <div class="table-responsive">
              <table class="table text-start align-middle table-bordered table-hover mb-0">
                  <thead>
                      <tr class="text-white">
                          {{-- <th scope="col"><input class="form-check-input" type="checkbox"></th> --}}

                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Gender</th>
                          <th scope="col">Phone Number</th>
                          <th scope="col">Report</th>
                          <th scope="col">Age</th>
                          <th scope="col">Blood Type</th>
                          <th scope="col">Status</th>
                          <th scope="col">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($bds as $item)
                      @if ($item->status ==0 )
                          <tr>

                              <td>{{ $item->b_d_name }}</td>
                              <td>{{ $item->b_d_email }}</td>
                              <td>{{ $item->b_d_gender }}</td>
                              <td>{{ $item->b_d_phone }}</td>
                              <td> <a href="{{route('showreport',['id'=>$item->id])}}"><img src="{{url('public/Image/'.$item->b_d_reprt )}}" alt="" width="20%" ></a> </td>
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



                                      <a class="btn btn-sm btn-primary"  href="{{route('dest',['id'=>$item->id])}}">Reject &nbsp;<i class="fa  fa-ban me-2"></i></a>
                                      <a class="btn btn-sm btn-success" href="{{route('editform',['id'=>$item->id])}}">Accept <i class="fa  fa-check me-2"></i></a>
                                  </td>
                                 @endif



                          </tr>
                          @endif
                      @endforeach

                  </tbody>
              </table>
          </div>
      </div>
  </div>
  <!-- blood_doners -->


    <!-- blood_doners -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Blood Doners Accepted</h6>
                <a href="">Show All</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            {{-- <th scope="col"><input class="form-check-input" type="checkbox"></th> --}}

                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Report</th>
                            <th scope="col">Age</th>
                            <th scope="col">Blood Type</th>
                            <th scope="col">Status</th>
                            {{-- <th scope="col">Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bds as $item)
                        @if($item->status ==1 )
                            <tr>

                                <td>{{ $item->b_d_name }}</td>
                                <td>{{ $item->b_d_email }}</td>
                                <td>{{ $item->b_d_gender }}</td>
                                <td>{{ $item->b_d_phone }}</td>
                                <td> <a href="{{route('showreport',['id'=>$item->id])}}"><img src="{{url('public/Image/'.$item->b_d_reprt )}}" alt="" width="20%" ></a> </td>

                                <td>{{ $item->b_d_age }}</td>
                                <td>{{ $item->name }}</td>


                                      @if($item->status ==1)
                                      <td>Accepted</td>
                                      @elseif($item->status ==2)
                                      <td>Rejected</td>
                                      @endif
                                 {{-- @if ($item->status ==0 )
                                    <td>



                                        <a class="btn btn-sm btn-primary" href="{{route('destroy',['id'=>$item->id])}}">Reject</a>
                                        <a class="btn btn-sm btn-success" href="{{route('editform',['id'=>$item->id])}}">Accept</a>
                                    </td>
                                   @endif --}}



                            </tr>
                            @endif
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- blood_doners -->




    <!-- blood_doners -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Blood Doners Rejected</h6>
                <a href="">Show All</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            {{-- <th scope="col"><input class="form-check-input" type="checkbox"></th> --}}

                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Report</th>
                            <th scope="col">Age</th>
                            <th scope="col">Blood Type</th>
                            <th scope="col">Status</th>
                            {{-- <th scope="col">Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bds as $item)
                        @if($item->status ==2 )
                            <tr>

                                <td>{{ $item->b_d_name }}</td>
                                <td>{{ $item->b_d_email }}</td>
                                <td>{{ $item->b_d_gender }}</td>
                                <td>{{ $item->b_d_phone }}</td>
                                <td> <a href="{{route('showreport',['id'=>$item->id])}}"><img src="{{url('public/Image/'.$item->b_d_reprt )}}" alt="" width="20%" ></a> </td>
                                <td>{{ $item->b_d_age }}</td>
                                <td>{{ $item->name }}</td>


                                      @if($item->status ==1)
                                      <td>Accepted</td>
                                      @elseif($item->status ==2)
                                      <td>Rejected</td>
                                      @endif
                                 {{-- @if ($item->status ==0 )
                                    <td>



                                        <a class="btn btn-sm btn-primary" href="{{route('destroy',['id'=>$item->id])}}">Reject</a>
                                        <a class="btn btn-sm btn-success" href="{{route('editform',['id'=>$item->id])}}">Accept</a>
                                    </td>
                                   @endif --}}



                            </tr>
                            @endif
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- blood_doners -->








