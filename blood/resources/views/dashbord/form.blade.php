@extends('dashbord.indexDD')
@section('title','Dddddddoners')
@section('messages','active')

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
@include('dashbord.layout.forms')
@endsection

@section('copyright')
@include('dashbord.layout.copyright')
@endsection
