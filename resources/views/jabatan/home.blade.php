@extends('layouts.master')


@section('title')
<title>Web Course | Jabatan</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Jabatan</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Jabatan</li>
    </ol>
</section>
@endsection

@section('content')
<br><br>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Tabel jabatan</h3>
        <a href="/jabatan/create">
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
                    <a href="/jabatan/{{ $d->id }}">
                        {{$d->position_name}}
                    </a>
                </td>
                <td>
                    <a href="/jabatan/edit/{{ $d->id }}">
                        <button type="submit" class="btn-primary">Edit</button>
                    </a>
                    <form action="/jabatan/{{ $d->id }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="_method" value="DELETE" />
                        <button type="submit" class="btn-warning">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </table>
    </div>
    <!-- /.box-body -->
</div>
@endsection