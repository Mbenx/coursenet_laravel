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
    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">
        <table class="table table-striped">
            <tr>
                <th style="width: 10px">No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nomor Telephone</th>
                <th>Jabatan</th>
                <th>Action</th>
            </tr>
            @foreach ($data as $kar)
            <tr> 
                <td>{{$kar->no}}</td>
                <td>
                    <a href="/karyawan/{{ $kar->no }}">
                    {{$kar->nama_karyawan}}
                    </a>
                </td>
                <td>{{$kar->alamat}}</td>
                <td>{{$kar->telp}}</td>
                <td>{{$kar->jabatan}}</td>
                <td>
                    <a href="/karyawan/edit/{{ $kar->no }}">
                        <button class="btn-primary">Edit</button>
                    </a>
                    <a href="/karyawan/delete/{{ $kar->no }}">
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