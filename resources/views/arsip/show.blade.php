@extends('layouts.master')


@section('title')
<title>Web Course | Arsip</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Arsip</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Arsip</li>
    </ol>
</section>
@endsection

@section('content')
<br><br>
{{$data->nama_arsip}}
@endsection