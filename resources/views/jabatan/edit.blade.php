@extends('layouts.master')


@section('title')
<title>Web Course | Jabatan</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Jabatan
        <small>Edit</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Jabatan</a></li>
        <li class="active">Edit</li>
    </ol>
</section>
@endsection

@section('content')
<br><br>
{{-- @foreach ($data as $a)
{{$a->nama_Jabatan}}    
@endforeach --}}

{{ $data->nama_jabatan}}
@endsection