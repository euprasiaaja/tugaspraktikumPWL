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

        $ktm = new Ktm;
        $ktm->id_mahasiswa = $mahasiswa->id_mahasiswa;
        $ktm->nomor_identitas = $request->no_identitas;
        $ktm->save();

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
        $mhs = Mahasiswa::find($id_mahasiwa);
        return view('update', [
            'mahasiswa' => $mhs
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'jurusan' => 'required',    
            'alamat' => 'required',
        ]);

        $mhs = Mahasiswa::find($id_mahasiswa);
        $ktm = Ktm::find($request->id_ktm);
        
        $mhs->nama = $request->nama;
        $mhs->nim = $request->nim;
        $mhs->jurusan = $request->jurusan;
        $mhs->alamat = $request->alamat;
        
        $ktm->nomor_identitas = $request->no_identitas;
        
        $mhs->save();
        $ktm->save();

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ktm = Ktm::find($id_ktm);
        $mhs = Mahasiswa::find($ktm->id_mahasiswa);

        return view('delete', [
            'ktm' => $ktm,
            'mahasiswa' => $mhs
        ]);
    }
    public function delete_data(string $id_ktm)
    {
        $ktm = Ktm::find($id_ktm);
        $mhs = Mahasiswa::find($ktm->id_mahasiswa);

        $ktm->delete();
        $mhs->delete();

        return redirect()->route('index');
}
}
