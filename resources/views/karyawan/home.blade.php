@extends('layouts.master')


@section('title')
<title>Web Course | Karyawan</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Karyawan</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Karyawan</li>
    </ol>
</section>
@endsection

@section('content')
<br><br>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Tabel Karyawan</h3>
        <a href="/karyawan/create">
        <button type="button" class="btn btn-primary pull-right">+ Create New</button>
        </a>
    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">
        <table class="table table-striped">
            <tr>
                <th style="width: 10px">No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>E-Mail</th>
                <th>Nomor Telephone</th>
                <th>Jabatan</th>
                <th>Action</th>
            </tr>
            @foreach ($data as $kar)
            <tr>
                <td>{{$kar->id}}</td>
                <td>
                    <a href="/karyawan/{{ $kar->id }}">
                        {{$kar->employee_name}}
                    </a>
                </td>
                <td>{{$kar->address}}</td>
                <td>{{$kar->email}}</td>
                <td>{{$kar->phone}}</td>
                <td>{{$kar->position->position_name}}</td>
                <td>
                    <a href="/karyawan/edit/{{ $kar->id }}">
                        <button class="btn-primary">Edit</button>
                    </a>
                    <a href="/karyawan/delete/{{ $kar->id }}">
                        <button class="btn-warning">Delete</button>
                    </a>
                </td>
            </tr>
            @endforeach

        </table>
    </div>
    <!-- /.box-body -->
</div>
@endsection