@extends('dashbord.indexDD')
@section('title','Doners')
@section('admindoners','active')

@section('loading')
@include('dashbord.layout.loading')
@endsection

@section('slidbar')
@include('dashbord.layout.slidbar')
@endsection

@section('navbar')
@include('dashbord.layout.nav')
@endsection
@section('tables')
@include('dashbord.layout.doners')
@endsection

@section('copyright')
@include('dashbord.layout.copyright')
@endsection
