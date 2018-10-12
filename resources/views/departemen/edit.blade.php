@extends('layouts.master')


@section('title')
<title>Web Course | Departemen</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Departemen
        <small>Edit</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Departemen</a></li>
        <li class="active">Edit</li>
    </ol>
</section>
@endsection

@section('content')
<br><br>
{{-- @foreach ($data as $a)
{{$a->nama_Departemen}}    
@endforeach --}}

{{ $data->nama_departemen}}
@endsection