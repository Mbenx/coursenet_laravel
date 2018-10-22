<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Departement;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Departement::all();
        return view('departemen/home',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departemen/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        // Eloquent
        // Store biasa
        $store = new Departemen;
        $store->nama_departemen = $req->nama_departemen;
        $store->save();

        return redirect('/departemen');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Departement::where('id','=',$id)->first();
        if(!$data){
            abort(404);
        }
        //dd($data);
        return view('departemen/show',['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('departemens')->where('id', $id)->first();

        //dd($pegawai);

        return view('departemen/edit',['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        // Eloquent
        // Update biasa
        $update = Departemen::where('id','=',$req->id)->first();
        $update->nama_departemen = $req->nama_departemen;
        $update->save();

        return redirect('/departemen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
