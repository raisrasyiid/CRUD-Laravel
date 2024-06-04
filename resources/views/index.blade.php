@extends('template')

@section('content')
<h1 class="text-center">CRUD Sederhana</h1>
<a href="/crud/create" class="btn btn-primary btn-sm mb-3">Tambah</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <td>NO</td>
            <td>NIM</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Gender</td>
            <td>Alamat</td>
            <td>Aksi</td>
        </tr>
    </thead>
    @foreach ($mahasiswa as $key => $mahasiswa)
    <tbody>
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$mahasiswa->nim}}</td>
            <td>{{$mahasiswa->nama}}</td>
            <td>{{$mahasiswa->gender}}</td>
            <td>{{$mahasiswa->kelas}}</td>
            <td>{{$mahasiswa->alamat}}</td>
            <td>
                <a href="/crud/{{$mahasiswa->id}}" class="btn btn-primary btn-sm">Detail</a>
                <a href="/crud/{{$mahasiswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                <form action="/crud/{{$mahasiswa->id}}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
    </tbody>
    @endforeach
    
</table>
@endsection