@extends('layouts.master')


@section('title')
<title>Web Course | Karyawan</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Karyawan
        <small>Edit</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Karyawan</a></li>
        <li class="active">Edit</li>
    </ol>
</section>
@endsection

@section('content')
<br><br>
{{-- @foreach ($data as $a)
{{$a->nama_karyawan}}    
@endforeach --}}

{{ $data->nama_karyawan}}
@endsection