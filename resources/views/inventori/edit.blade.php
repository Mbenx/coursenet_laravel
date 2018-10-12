@extends('layouts.master')


@section('title')
<title>Web Course | Inventori</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Inventori
        <small>Edit</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inventori</a></li>
        <li class="active">Edit</li>
    </ol>
</section>
@endsection

@section('content')
<br><br>
{{-- @foreach ($data as $a)
{{$a->nama_inventori}}    
@endforeach --}}

{{ $data->nama_inventori}}
@endsection