<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Userscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->no_ktp = $request->no_ktp;
        $user->alamat = $request->alamat;
        $user->pendidikan = $request->pendidikan;
        $user->nama_sekolah = $request->nama_sekolah;
        $user->jurusan = $request->jurusan;
        $user->perusahaan = $request->perusahaan;
        $user->jabatan = $request->jabatan;
        $user->tahun_masuk = $request->tahun_masuk;
        $user->tahun_lulus = $request->tahun_lulus;
        $user->keterangan = $request->keterangan;
        $user->save();

        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
