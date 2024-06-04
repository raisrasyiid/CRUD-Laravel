@extends('template')

@section('content')
    <h1>Tambah Data</h1>
    <a href="/crud" class="btn btn-primary btn-sm">Kembali</a>
    <form action="/crud" method="post">
        @csrf
        <div class="mb-3">
            <label for="">NIM</label>
            <input type="text" class="form-control" name="nim">
        </div>
        <div class="mb-3">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="mb-3">
            <label for="">Kelas</label>
            <input type="text" class="form-control" name="kelas">
        </div>
        <div class="mb-3">
            <label for="">Gender</label>
            <select name="gender" class="form-control">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="">Alamat</label>
            <textarea class="form-control" name="alamat" rows='4'></textarea>
        </div>
        {{-- <div class="mb-3">
            <label for="">Hobi</label>
            <input type="text" class="form-control" name="hobi">
        </div> --}}
        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>


    </form>
@endsection