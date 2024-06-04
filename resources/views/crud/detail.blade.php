@extends('template')

@section('content')
<h1>Detail</h1>
<a href="/crud" class="btn btn-primary btn-sm">Kembali</a>

<table class="table table-bordered">
    <tr>
        <td>NIM</td>
        <td>{{$mahasiswa->nim}}</td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>{{$mahasiswa->nama}}</td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td>{{$mahasiswa->kelas}}</td>
    </tr>
    <tr>
        <td>Gender</td>
        <td>{{$mahasiswa->gender}}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>{{$mahasiswa->alamat}}</td>
    </tr>
</table>
@endsection