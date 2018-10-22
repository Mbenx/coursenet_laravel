@extends('layouts.master')


@section('title')
<title>Web Course | Inventori</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Inventori</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Inventori</li>
    </ol>
</section>
@endsection

@section('content')
<br><br>
{{$data->inventori_name}}

<h3>Data Pengguna</h3>
<ul>
@foreach ($data->employee as $d)
    <li>
        {{$d->employee_name}}
    </li>
@endforeach
</ul>
@endsection