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
     <!-- Main row -->
     <div class="row">
       <div class="col-md-12">
           
            {{-- {{$data}} --}}

            @foreach($data as $pegawai)
              {{$pegawai->no}}. 
              {{$pegawai->nama_karyawan}} 
              | {{$pegawai->telp}} <br>
            @endforeach

            {{--  {{$data->EMPLOYEE_ID}}. 
              {{$data->FIRST_NAME}} {{$data->LAST_NAME}} 
              | {{$data->SALARY}} <br>  --}}

              {{--  {{ $data }}  --}}
       </div>                 
     </div>
     <!-- /.row (main row) -->
@endsection

