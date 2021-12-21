<?php

namespace App\Http\Controllers;

use App\Models\Makan;
use Illuminate\Http\Request;

class MakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Makan::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $makan = new Makan();
        $makan->nama = $request->nama;
        $makan->ket = $request->ket;
        $makan->save();

        return "Data added successfully!!!";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Makan  $makan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $nama = $request->nama;
        $ket = $request->ket;

        $makan = Makan::find($id);
        $makan->nama = $nama;
        $makan->ket = $ket;
        $makan->save();

        return "Data updated successfully!!!";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Makan  $makan
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;
        $makan = Makan::find($id);
        $makan->delete();

        return "Data deleted successfully!!!";
    }
}
