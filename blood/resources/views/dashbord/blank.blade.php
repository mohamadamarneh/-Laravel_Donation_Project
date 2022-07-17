@extends('dashbord.indexDD')
@section('title','chart')
{{-- @section('blank','active') --}}

@section('loading')
@include('dashbord.layout.loading')
@endsection

@section('slidbar')
@include('dashbord.layout.slidbar')
@endsection

@section('navbar')
@include('dashbord.layout.nav')
@endsection
@section('blank')
@include('dashbord.layout.blanks')
@endsection

@section('copyright')
@include('dashbord.layout.copyright')
@endsection



