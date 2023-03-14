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
        $data = $request->all();

        try {
            $response = Asset::create($data);
            
            return response()->json([
                'status' => 'success',
                'data'   => $response,
                'message' => 'Berhasil menambah data!'
            ]);
            
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'failed',
                'data'   => null,
                'message' => 'Terjadi kesalahan!'
            ]);
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
        $data = $request->all();
        
        try {
            $response = Asset::where('id', $id)->update($data);
    
            return response()->json([
                'status' => 'success',
                'data'   => $response,
                'message' => 'Berhasil merubah data!'
            ]);
            
        } catch (\Throwable $th) {

            return response()->json([
                'status' => 'failed',
                'data'   => null,
                'message' => 'Terjadi kesalahan!'
            ]);
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
        
    }
}
