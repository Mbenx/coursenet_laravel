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
<div class="col-md-6">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Edit jabatan</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/jabatan/update" method="POST">
            <div class="box-body">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" class="form-control" name="id" value="{{ $data->id}}" />
                    <input type="hidden" name="_method" value="PUT" />
                </div>
                <div class="form-group">
                    <label>Nama jabatan</label>
                    <input type="text" class="form-control" name="nama_jabatan" value="{{ $data->nama_jabatan}}"
                        placeholder="Nama jabatan">
                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.box -->

</div>
@endsection