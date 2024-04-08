@extends('layouts.master')

@section('container')
    <h1 class="text-center">Data Mahasiswa</h1>
    <div class="mb-4">
    <button type="button" class="btn btn-success ">Tambah Data</button>
    </div>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="row">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Fakultas</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
             @foreach($mahasiswa as $mhs)
              <tr>
                <th scope="row">{{$mhs->id_mahasiswa}}</th>
                <td>{{$mhs->nama}}</td>
                <td>{{$mhs->nim}}</td>
                <td>{{$mhs->alamat}}</td>
                <td>{{$mhs->ktm->nomor_identitas}}</td>
                <td>
                    <button type="button" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection
