<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventori;
class InventoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Inventori::all();
        return view('inventori/home',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventori/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // mass assigment
         Inventori::create([
            'nama_inventori' => $request->nama_inventori,
            ]);
    
            return redirect('/inventori');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Inventori::where('id','=',$id)->first();
        if(!$data){
            abort(404);
        }
        return view('inventori/show',['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('inventoris')->where('id', $id)->first();

        //dd($pegawai);

        return view('inventori/edit',['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Inventori::where('id','=',$request->id)
        ->update([
            'nama_inventori' => $request->nama_inventori
        ]);

        return redirect('/inventori');
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
