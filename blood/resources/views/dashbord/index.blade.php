@extends('dashbord.indexDD')
@section('title','Home page')
@section('admin','active')

@section('loading')
@include('dashbord.layout.loading')
@endsection

@section('slidbar')
@include('dashbord.layout.slidbar')
@endsection








@section('navbar')
@include('dashbord.layout.nav')
@endsection
@section('statistics')
@include('dashbord.layout.statistics')
@endsection

@section('widgets')

@include('dashbord.layout.widgets')

@endsection
@section('copyright')

@include('dashbord.layout.copyright')



@endsection
