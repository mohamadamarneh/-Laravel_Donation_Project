 <!-- Widgets Start -->
 <div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="h-100 bg-secondary rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <h6 class="mb-0">Feedbacks</h6>
                    <a href="messages">Show All</a>
                </div>
@foreach ($mes as $item)



                <div class="d-flex align-items-center border-bottom py-3">

                    <div class="w-100 ms-3">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-0">{{$item->name}}</h6>
                           <small>{{$item->created_at}}</small>
                        </div>
                        <span>{{$item->message}}</span>
                    </div>
                </div>@endforeach
                {{-- ******* --}}
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="h-100 bg-secondary rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Calender</h6>
                    {{-- <a href="">Show All</a> --}}
                </div>
                <div id="calender"></div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="h-100 bg-secondary rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">To Do List</h6>
                    <a href="">Show All</a>
                </div>

                    <form action="{{ route('add-todo') }}" method="post">
                        @csrf<div class="d-flex mb-2">
                    <input class="form-control bg-dark border-0" name="todo"  type="text" placeholder="Enter task">
                    <button type="submit" class="btn btn-primary ms-2">Add</button></form>
                </div>

@foreach ($todo as $item)


                <div class="d-flex align-items-center border-bottom py-2">
                    <div class="w-100 ms-3">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <span>{{$item->todo}}</span>
                           <a href="{{route('destroy',['id'=>$item->id])}}"> <button class="btn btn-sm"><i class="fa fa-times"></i></button></a>
                        </div>
                    </div>
                </div>
@endforeach



            </div>
        </div>
    </div>
</div>
<!-- Widgets End -->
