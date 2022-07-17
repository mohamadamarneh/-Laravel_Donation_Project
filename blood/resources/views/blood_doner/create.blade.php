@extends('layout.main')
@section('title')
    Ahyaha|Donor|Register
@endsection
@section('style')
     <style>
        .min-h-screen {
            font-family: "Inter", sans-serif;
        }
     
    </style>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet" />


    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
@endsection
@section('content')

<div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">

    <div class="max-w-screen-xl m-0 sm:m-20 bg-white shadow sm:rounded-lg flex justify-center flex-1">
        <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
            <div class="mt-32 flex flex-col items-center">
                <h1 class="text-2xl xl:text-3xl font-extrabold">
                    registration </h1>
                <div class="w-full flex-1 mt-8">
                    <div class="my-12 border-b text-center">
                    <div class="mx-auto max-w-xs">
                            <form action="{{ route('doner.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ $message }}
                                    </div>
                                @elseif ($message = Session::get('status'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @endif
                                <input type="text"
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white "
                                    name="b_d_name" placeholder="User name">
                                @error('b_d_name')
                                    <div class="alert alert-danger mt-3 mb-1" style="color:crimson">{{ $message }}
                                    </div>
                                @enderror
                                <input type="text"
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-3"
                                    name="b_d_email" placeholder="Email">
                                @error('b_d_email')
                                    <div class="alert alert-danger mt-3 mb-1" style="color:crimson">{{ $message }}
                                    </div>
                                @enderror
                              

                                <input type="text"
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-3"
                                    name="b_d_phone" placeholder="Phone number">
                                @error('b_d_phone')
                                    <div class="alert alert-danger mt-3 mb-1" style="color:crimson">{{ $message }}
                                    </div>
                                @enderror
                                <select
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-3"
                                    name="b_d_gender">
                                    <option value="gender">Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <select class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-3"
                                    name="b_d_blood_type">
                                    <option value="">select blood type</option>
                                    @foreach ($blood as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                <input type="number"
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-3"
                                    name="b_d_age" placeholder="Age">
                                @error('b_d_age')
                                    <div class="alert alert-danger mt-3 mb-1" style="color:crimson">{{ $message }}
                                    </div>
                                @enderror

                                <select
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-3"
                                    name="b_d_address">
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

                                <input type="file"
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-3"
                                    id="" name="b_d_reprt" placeholder="Medical Certificat">
                                <input type="hidden" id="form6Example5"
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-3"
                                    name="status" value="0" />
                                    <input type="password"
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-3"
                                    name="b_d_password" placeholder="Password">
                                @error('b_d_password')
                                    <div class="alert alert-danger mt-3 mb-1" style="color:crimson">{{ $message }}
                                    </div>
                                @enderror
                                <input type="password"
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-3"
                                    name="password_confirmation" placeholder="Password confirmation">
                                <button
                                    class="mt-3 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none"
                                    style="background-color:   #ee3d32">
                                    <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                        <circle cx="8.5" cy="7" r="4" />
                                        <path d="M20 8v6M23 11h-6" />
                                    </svg>
                                    <span class="ml-3">
                                        Sign Up
                                    </span>
                                </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-1 bg-indigo-100 text-center hidden lg:flex">
            <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat"
                style="background-image: url('{{ asset('img/group.png') }}') ; width: 70%; margin-left:15%;"></div>
        </div>
    </div>
    <div class="REMOVE-THIS-ELEMENT-IF-YOU-ARE-USING-THIS-PAGE hidden treact-popup fixed inset-0 flex items-center justify-center"
        style="background-color: rgba(0,0,0,0.3);">
        <div class="max-w-lg p-8 sm:pb-4 bg-white rounded shadow-lg text-center sm:text-left">
        </div>
    </div>
    </form>
</div>
@endsection

