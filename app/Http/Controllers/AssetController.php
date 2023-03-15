<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assets = Asset::all();
        return view('application.homepage', [
            'assets' => $assets
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama'   => ['required'],
            'harga'  => ['required'],
            'jenis'  => ['required'],
            'status' => ['required']
        ]);

        try {
            $response = Asset::create($data);
            return redirect()->route('asset.index')->with('success', "Berhasil menambahkan data!");            
        } catch (\Throwable $th) {
            return redirect()->route('asset.index')->with('failed', "Terjadi kesalahan!");  
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->validate($request, [
            'nama'   => ['required'],
            'harga'  => ['required'],
            'jenis'  => ['required'],
            'status' => ['required']
        ]);
        
        try {
            $response = Asset::where('id', $id)->update($data);
            return redirect()->route('asset.index')->with('success', "Berhasil merubah data!"); 
        } catch (\Throwable $th) {
            return redirect()->route('asset.index')->with('failed', "Terjadi kesalahan!");  
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Asset::destroy($id);
            return redirect()->route('asset.index')->with('success', "Berhasil menghapus data!"); 
        } catch (\Throwable $th) {
            return redirect()->route('asset.index')->with('failed', "Terjadi kesalahan!"); 
        }
    }
}
