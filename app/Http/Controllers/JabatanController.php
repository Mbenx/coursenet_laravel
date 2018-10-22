<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// for query builder
use DB;

// for ORM
use App\Position;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function index()
    {
        // menampilkan data ready
        $data = Position::all();

        // menampilkan data ready dan yg sudah di softDelete
        // $data = Jabatan::withTrashed()->get();      
        // $data = DB::table('jabatans')->get();
        return view('jabatan/home',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jabatan/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $validatedData = $request->validate([
            'nama_jabatan' => 'required|min:5|max:20',
        ]);
        
        // mass assigment
        Jabatan::create([
        'nama_jabatan' => $request->nama_jabatan,
        ]);

        return redirect('/jabatan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('jabatans')->where('id', $id)->first();
        return view('jabatan/show',['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('jabatans')->where('id', $id)->first();

        //$current = Carbon::now();

        //dd($current);

        return view('jabatan/edit',['data' => $data]);
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
        Jabatan::where('id','=',$request->id)
        ->update([
            'nama_jabatan' => $request->nama_jabatan
        ]);

        return redirect('/jabatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete biasa & softdeletes
        $data = Jabatan::where('id','=',$id);
        $data->delete();

        // menghilangkan data dalam DB di setingan Softdelete
        //$data->forceDelete();

        return redirect('/jabatan');        
    }
}
