@extends('dashbord.indexDD')
@section('title','chart')
@section('active','active')

@section('loading')
@include('dashbord.layout.loading')
@endsection

@section('slidbar')
@include('dashbord.layout.slidbar')
@endsection

@section('navbar')
@include('dashbord.layout.nav')
@endsection
@section('button')
@include('dashbord.layout.button_')
@endsection

@section('copyright')
@include('dashbord.layout.copyright')
@endsection
