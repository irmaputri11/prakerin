<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswi;

class Siswicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswi = Siswi::all();
        $response = [
            'succes' => true,
            'data' => $siswi,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
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
        $siswi = new Siswi;
        $siswi->nama = $request->nama;
        $siswi->kelas = $request->kelas;
        $siswi->hobi = $request->hobi;
        $siswi->sekolah = $request->sekolah;
        $siswi->umur = $request->umur;
       $siswi->save();
        $response = [
            "succes" => true,
            "data" => $siswi,
            "message" => "berhasil"
        ];
        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswi = Siswi::findOrFail($id);
        $response = [
            "succes" => true,
            "data" => $siswi,
            "message" => "berhasil"
        ];
        return response()->json($response, 200);
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
         $siswi = Siswi::findOrFail($id);
        $siswi->nama = $request->nama;
        $siswi->kelas = $request->kelas;
        $siswi->hobi = $request->hobi;
        $siswi->sekolah = $request->sekolah;
        $siswi->umur = $request->umur;
       $siswi->save();
        $response = [
            "succes" => true,
            "data" => $siswi,
            "message" => "berhasil"
        ];
        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $siswi = Siswi::findOrFail($id)->delete();
         $response = [
            'success' => true,
            'data' => $siswi,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }
}
