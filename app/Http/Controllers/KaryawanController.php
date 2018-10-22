<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Employee;

class KaryawanController extends Controller
{
    public function index(){
        // Query Builder
        //$pegawai = "INI TAMPILAN KARYAWAN";
        //$pegawai = DB::table('karyawan')->get();        
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

        // Eloquent
        $pegawai = Employee::all();

        //dd($pegawai);

        return view('karyawan/home',['data' => $pegawai]);
    }

    public function show($id){
        $data = Employee::where('id','=',$id)->first();
        if(!$data){
            abort(404);
        }
        return view('karyawan/show',['data' => $data]);
    }

    public function edit($id){
        $data = Employee::where('id','=',$id)->first();
        if(!$data){
            abort(404);
        }
        return view('karyawan/edit',['data' => $data]);        
    }

    public function update(Request $request){
        $filename = $request->employee_name.time().'.png';
        $request->file('featured_img')->storeAs('img/employee',$filename);
        //dd('berhasil');

        Employee::where('id', $request->id)
        ->update([
            'identity_number' => $request->identity_number,
            'employee_name' => $request->employee_name,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'picture' => $filename,
            'position_id' => $request->position_id
        ]);

        return redirect('/karyawan');
    }

    public function delete($id){
        // use Query Builder
        // DB::table('karyawan')->where('no', '=', $id)->delete();
    }

    public function create(){
        return view('karyawan/create');
    }

    public function store(Request $req){
        // Insert use query builder
        DB::table('karyawan')->insert(
            ['nama_karyawan' => $req->nama_karyawan,
             'alamat' => $req->alamat,
             'telp' => $req->telp,
             'jabatan' => $req->jabatan]
        );

        
        
        // Eloquent ORM

        // insert biasa
        // $karyawan = new Karyawan;
        // $karyawan->nama_karyawan = 'Herlambang';
        // $karyawan->alamat = 'skskssj';
        // $karyawan->telp = '082728290';
        // $karyawan->jabatan = '1';
        // $karyawan->save();

        // mass assigment
        // Karyawan::create([
        // 'nama_karyawan' => 'asd',
        // 'alamat' => 'sasasa',
        // 'telp' => '012892109821',
        // 'jabatan' => 'programmer',
        // ]);

        return redirect('/karyawan');
    }
}
