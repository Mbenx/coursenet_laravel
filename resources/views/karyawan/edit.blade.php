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
<div class="col-md-6">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Edit Karyawan</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
    <form role="form" action="/karyawan/update" method="POST" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" class="form-control" name="id" value="{{ $data->id}}" />
                    <input type="hidden" name="_method" value="PUT"/>
                </div>
                <div class="form-group">
                    <label>Identity Number</label>
                    <input type="text" class="form-control" name="identity_number" value="{{ $data->identity_number}}" placeholder="Nama Karyawan">
                </div>
                <div class="form-group">
                    <label>Nama Karyawan</label>
                    <input type="text" class="form-control" name="employee_name" value="{{ $data->employee_name}}" placeholder="Nama Karyawan">
                </div>
                <div class="form-group">
                    <label>Alamat Karyawan</label>
                    <input type="text" class="form-control" name="address" value="{{ $data->address}}" placeholder="Alamat Karyawan">
                </div>
                <div class="form-group">
                    <label>Nomor Telephone</label>
                    <input type="text" class="form-control" name="phone" value="{{ $data->phone}}">
                </div>
                <div class="form-group">
                    <label>E-Mail</label>
                    <input type="text" class="form-control" name="email" value="{{ $data->email}}">
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <select class="form-control" name="position_id">
                        <option value="{{ $data->position->id}}">{{ $data->position->position_name}}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Upload Foto</label>
                    <input type="file" name="featured_img">
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