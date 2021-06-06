@extends('layouts.master')
@section("header")

@include("layouts.header")

@stop

@section('content')
{{ $slot }}
@endsection