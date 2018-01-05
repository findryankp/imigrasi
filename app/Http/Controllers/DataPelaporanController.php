<?php

namespace App\Http\Controllers;

use App\DataPelaporan;
use Illuminate\Http\Request;
use Mapper;
use Image;
use File;
class DataPelaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pelaporan');
    }
    public function wel()
    {
        return view('welcome');
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
        $foto=$request->file('foto');
        $filename=time().".".$foto->getClientOriginalExtension();
        Image::make($foto)->save(public_path('/uploads/resources/'.$filename));
        DataPelaporan::create([
                'keterangan'=>$request->keterangan,
                'lokasi'=>$request->lokasi,
                'ketlok'=>$request->ketlok,
                'noTelp'=>$request->noTelp,
                'foto'=>$filename,
            ]);
        return view('pelaporan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DataPelaporan  $dataPelaporan
     * @return \Illuminate\Http\Response
     */
    public function show(DataPelaporan $dataPelaporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataPelaporan  $dataPelaporan
     * @return \Illuminate\Http\Response
     */
    public function edit(DataPelaporan $dataPelaporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataPelaporan  $dataPelaporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataPelaporan $dataPelaporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataPelaporan  $dataPelaporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataPelaporan $dataPelaporan)
    {
        //
    }
}
