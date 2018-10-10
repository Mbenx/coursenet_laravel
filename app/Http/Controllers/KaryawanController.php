<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
