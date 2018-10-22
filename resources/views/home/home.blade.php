@extends('layouts.master')


@section('title')
<title>Web Course | Home</title>
@endsection

@section('content-header')
<section class="content-header">
    {!! $unescaped !!}
    <h1>
        Dashboard
        <small>Homepage</small>
    </h1>

    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>
@endsection
@section('content')
   <h1> {{ $data }} </h1>
@endsection