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
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Inventori</li>
    </ol>
</section>
@endsection
@section('content')
<br><br>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Tabel inventori</h3>
        <a href="/inventori/create">
            <button type="button" class="btn btn-primary pull-right">+ Create New</button>
        </a>
    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">
        <table class="table table-striped">
            <tr>
                <th style="width: 10px">id</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
            @foreach ($data as $d)
            <tr>
                <td>{{$d->id}}</td>
                <td>
                    <a href="/inventori/{{ $d->id }}">
                        {{$d->nama_inventori}}
                    </a>
                </td>
                <td>
                    <a href="/inventori/edit/{{ $d->id }}">
                        <button class="btn-primary">Edit</button>
                    </a>
                    <a href="/inventori/delete/{{ $d->id }}">
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