@extends('dashbord.indexDD')
@section('title','Needed')
@section('adminneeded','active')

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
@include('dashbord.layout.needed')
@endsection

@section('copyright')
@include('dashbord.layout.copyright')
@endsection
