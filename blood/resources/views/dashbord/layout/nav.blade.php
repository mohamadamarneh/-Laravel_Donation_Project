
    <!-- Content Start -->
    <div class="content">

  <!-- Navbar Start -->
   <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    {{-- <form class="d-none d-md-flex ms-4">
        <input class="form-control bg-dark border-0" type="search" placeholder="Search">
    </form> --}}
    <div class="navbar-nav align-items-center ms-auto">
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <i class="fa fa-envelope me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Feedback</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">

@foreach ($mes as $item)


                <hr class="dropdown-divider">
                <a href="#" class="dropdown-item">
                    <div class="d-flex align-items-center">

                        <div class="ms-2">
                            <h6 class="fw-normal mb-0">{{$item->name}} send you a feedback</h6>
                            <small>{{$item->created_at}}</small>
                        </div>
                    </div>
                </a>
@endforeach
                <hr class="dropdown-divider">


                <a href="messages" class="dropdown-item text-center">See all feadback </a>
            </div>
        </div>
        <div class="nav-item dropdown">




            <a href="/n" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <i class="fa fa-bell me-lg-2">



                </i>
                <span class="d-none d-lg-inline-flex">Notificatin</span>
            </a>

{{-- {{$d}} --}}
               <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
          {{-- {{dd(session($bds))}} --}}
                @foreach ($d as $item)

            @if ($item->status ==0 )

                <a href="#" class="dropdown-item">
                    <h6 class="fw-normal mb-0">Request from:{{$item->b_d_name}} </h6>
                    <small>In: {{$item->updated_at}}</small>
                </a>
                @endif


                {{-- @if ($item->status ==1||$item->status ==2 )
                <a href="#" class="dropdown-item">
                    <h6 class="fw-normal mb-0">No Notificatin</h6>

                </a>

                 @break
                @endif --}}
@endforeach

                <hr class="dropdown-divider">
                <a href="admindoners" class="dropdown-item text-center">See all Request</a>
            </div>
        </div>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                {{-- <img class="rounded-circle me-lg-2" src="img/user.jpg" alt=""
                    style="width: 40px; height: 40px;"> --}}
                <span class="d-none d-lg-inline-flex">{{$userAdmin->name}}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                <a href="/blank" class="dropdown-item">Admin Profile</a>
                {{-- <a href="#" class="dropdown-item">Settings</a> --}}
                <a href="{{route('logoutAdmin')}}" class="dropdown-item">Log Out</a>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->




