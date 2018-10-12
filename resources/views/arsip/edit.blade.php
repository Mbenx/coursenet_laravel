@extends('layouts.master')


@section('title')
<title>Web Course | Arsip</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Arsip
        <small>Edit</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Arsip</a></li>
        <li class="active">Edit</li>
    </ol>
</section>
@endsection

@section('content')
<br><br>
{{-- @foreach ($data as $a)
{{$a->nama_arsip}}    
@endforeach --}}

{{ $data->nama_arsip}}
@endsection