@extends('dashbord.indexDD')
@section('title','To Do')
@section('tableee','active')

@section('loading')
@include('dashbord.layout.loading')
@endsection

@section('slidbar')
@include('dashbord.layout.slidbar')
@endsection

@section('navbar')
@include('dashbord.layout.nav')
@endsection
@section('table')
@include('dashbord.layout.todotable')
@endsection

@section('copyright')
@include('dashbord.layout.copyright')
@endsection


