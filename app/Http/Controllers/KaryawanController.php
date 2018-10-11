<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use DB;
use App\Karyawan;

class KaryawanController extends Controller
{
    public function index(){
        //$pegawai = "INI TAMPILAN KARYAWAN";

        $pegawai = DB::table('karyawan')->get();
        
        // $pegawai = DB::table('employees')
        // ->select('EMPLOYEE_ID','FIRST_NAME','LAST_NAME','SALARY')
        // ->get();

        // $pegawai = DB::table('employees')->first();
      
        // $pegawai = DB::table('employees')->count();

        // $pegawai = DB::table('employees')->max('SALARY');

        // $pegawai = DB::table('employees')
        // ->select('EMPLOYEE_ID','FIRST_NAME','LAST_NAME','SALARY')
        // ->where('FIRST_NAME','=','John')
        // ->get();

        //dd($pegawai);

        return view('karyawan/home',['data' => $pegawai]);
    }

    public function show($id){
        $pegawai = DB::table('karyawan')->where('no', $id)->first();
        return view('karyawan/show',['data' => $pegawai]);
    }

    public function edit($id){

        // $pegawai = DB::table('karyawan')
        // ->select('no','nama_karyawan','alamat','telp','jabatan')
        // ->where('no','=',$id)
        // ->get();

        $pegawai = DB::table('karyawan')->where('no', $id)->first();

        //dd($pegawai);

        return view('karyawan/edit',['data' => $pegawai]);
    }

    public function delete($id){
        
    }

    public function create(){

    }

    public function store(){
        // Eloquent ORM

        // insert biasa
        // $karyawan = new Karyawan;
        // $karyawan->nama_karyawan = 'Herlambang';
        // $karyawan->jabatan = '1';
        // $karyawan->save();

        // mass assigment
        Karyawan::create([
        'nama_karyawan' => 'Herlambang',
        'tlpn' => '012892109821',
        ]);
    }
}
