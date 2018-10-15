@extends('layouts.master')


@section('title')
<title>Web Course | jabatan</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        jabatan
        <small>Create</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> jabatan</a></li>
        <li class="active">Create</li>
    </ol>
</section>
@endsection

@section('content')
<br><br>
<div class="col-md-6">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Create jabatan</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->


        {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif --}}

        <form role="form" action="/jabatan/store" method="POST">
            <div class="box-body">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" class="form-control" name="no" />
                    <input type="hidden" name="_method" value="POST" />
                </div>
                <div class="form-group">
                    <label>Nama jabatan</label>
                    <input type="text" class="form-control" name="nama_jabatan" value="{{ old('nama_jabatan') }}"
                        placeholder="Nama jabatan">
                    
                    {{-- validasinya disini --}}
                    @if($errors->has('nama_jabatan'))
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('nama_jabatan') }}</li>
                        </ul>
                    </div>
                    @endif

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