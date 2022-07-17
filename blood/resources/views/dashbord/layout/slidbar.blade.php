 <!-- Sidebar Start -->
 <div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hand-holding-heart  me-2"></i>Ahyaha</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">

                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                {{-- @foreach ($name as $item)
<h6 class="mb-0">{{$item->name}}</h6>

                @endforeach --}}

                <span>Admin</span>


            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/admin" class="nav-item nav-link @yield('admin')"><i
                    class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

            <a href="/messages" class="nav-item nav-link @yield('messages')"><i class="fa fa-comment me-2"></i>Feedbacks</a>
            <a href="/todotable" class="nav-item nav-link @yield('tableee')"><i class="fa  fa-clipboard me-2"></i>To Do Table</a>
            <a href="/admindoners" class="nav-item nav-link @yield('admindoners')"><i class="fa fa-hand-holding-heart me-2"></i>Doners</a>
            <a href="/adminneeded" class="nav-item nav-link @yield('adminneeded')"><i class="fa fa-users me-2"></i>Patient</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="far fa-file-alt me-2"></i>Tools</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/blank" class="dropdown-item">Admin Profile</a>
                    {{-- <a href="{{route('loginAdmin')}}" class="dropdown-item">Login In</a> --}}

                    @if ($userAdmin->roll==1)



                    <a href="{{route('signup')}}" class="dropdown-item">Add Admin</a>
                    @endif
                    <a href="{{route('logoutAdmin')}}" class="dropdown-item">Log Out</a>

                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Sidebar End -->
