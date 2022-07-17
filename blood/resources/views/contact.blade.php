@extends('layout.main')
@section('title')
    title of the page
@endsection
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4"></h1>
            <nav aria-label="breadcrumb animated slideInDown">

            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 450px;">
                    <div class="position-relative h-100">
                        <iframe class="position-relative w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2103.830432166123!2d35.82946759425477!3d32.53090138115583!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c76d5c9d1646d%3A0x18736504d61cd290!2z2KjZhtmDINin2YTYr9mFIC8g2KfYsdio2K8!5e0!3m2!1sen!2sbd!4v1655151639546!5m2!1sen!2sbd"
                        frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">

                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                    <h6 class="text-primary text-uppercase mb-2">Contact Us</h6>
                    <h1 class="display-6 mb-4"> Contact Us Whether you have a question</h1>
                    <p class="mb-4">  are not sure about whether you can give blood or just want to say hello, we’re happy to hear from you.
                    <form  action="{{ route('add-store') }}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" name="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                    @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0 bg-light" name="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                    @error('email')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" name="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                    @error('subject')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0 bg-light" placeholder="Leave a message here" name="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                    @error('message')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


@endsection

