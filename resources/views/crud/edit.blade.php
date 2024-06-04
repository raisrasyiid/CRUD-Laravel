@extends('template')

@section('content')
    <h1>Edit Data</h1>
    <a href="/crud" class="btn btn-primary btn-sm">Kembali</a>
    <form action="/crud/{{$mahasiswa->id}}" method="post">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="">NIM</label>
            <input type="text" class="form-control" name="nim" value="{{$mahasiswa->nim}}">
        </div>
        <div class="mb-3">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{$mahasiswa->nama}}">
        </div>
        <div class="mb-3">
            <label for="">Kelas</label>
            <input type="text" class="form-control" name="kelas" value="{{$mahasiswa->kelas}}">
        </div>
        <div class="mb-3">
            <label for="">Gender</label>
            <select name="gender" class="form-control">
                <option value="L" @if($mahasiswa->gender == 'L') selected @endif>Laki-laki</option>
                <option value="P" @if($mahasiswa->gender == 'P') selected @endif>Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="">Alamat</label>
            <textarea class="form-control" name="alamat" rows='4'>{{$mahasiswa->alamat}}</textarea>
        </div>
        {{-- <div class="mb-3">
            <label for="">Hobi</label>
            <input type="text" class="form-control" name="hobi">
        </div> --}}
        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>


    </form>
@endsection