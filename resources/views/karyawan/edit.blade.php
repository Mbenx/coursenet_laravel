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
    <form role="form" action="/karyawan/update" method="POST">
            <div class="box-body">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" class="form-control" name="no" value="{{ $data->no}}" />
                    <input type="hidden" name="_method" value="PUT"/>
                </div>
                <div class="form-group">
                    <label>Nama Karyawan</label>
                    <input type="text" class="form-control" name="nama_karyawan" value="{{ $data->nama_karyawan}}" placeholder="Nama Karyawan">
                </div>
                <div class="form-group">
                    <label>Alamat Karyawan</label>
                    <input type="text" class="form-control" name="alamat" value="{{ $data->alamat}}" placeholder="Alamat Karyawan">
                </div>
                <div class="form-group">
                    <label>Nomor Telephone</label>
                    <input type="text" class="form-control" name="telp" value="{{ $data->telp}}" placeholder="Nama Karyawan">
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <select class="form-control" name="jabatan">
                        <option value="{{ $data->jabatan}}">{{ $data->jabatan}}</option>
                        <option value="manager">Manager</option>
                        <option value="karyawan">Karyawan</option>
                    </select>
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