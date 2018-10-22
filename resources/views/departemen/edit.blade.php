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
<div class="col-md-6">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Edit departemen</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/departemen/update" method="POST">
            <div class="box-body">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" class="form-control" name="id" value="{{ $data->id}}" />
                    <input type="hidden" name="_method" value="PUT" />
                </div>
                <div class="form-group">
                    <label>Nama departemen</label>
                    <input type="text" class="form-control" name="nama_departemen" value="{{ $data->nama_departemen}}"
                        placeholder="Nama departemen">
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