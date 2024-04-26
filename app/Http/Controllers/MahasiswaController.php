<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mhs = Mahasiswa::all();
        //mahasiswa disini merupakan model yang kita panggil
        //all() disini merupakan funtion 
        return view('mahasiswa', [
            'mahasiswa' => $mhs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate ([
            'nama' => 'required',
            'nim' => 'required|unique:mahasiswa',
            'jurusan' => 'required',
            'alamat' => 'required',
        ]);

        $mahasiswa = new Mahasiswa;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->save();
        return redirect()->route('index');
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
    public function edit(string $id_mahasiswa)
    {
        $mahasiswa = Mahasiswa::find($id_mahasiwa);
        return view('update', [
            'mahasiswa' => $mahasiswa
        ]);
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
}
}
