@extends('layouts.master')


@section('title')
<title>Web Course | Departemen</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Departemen</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Departemen</li>
    </ol>
</section>
@endsection

@section('content')
<br><br>
{{$data->nama_departemen}}
@endsection