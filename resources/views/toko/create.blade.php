@extends('layouts.master')

@section('content')
    <div class="container">
    <h1 class="text-warning">Tambah Data Toko</h1>
    <form action="/toko/store" method="POST">
        @csrf
        <div class="mb-3">
        <input type="text" class="form-control" placeholder="Nama barang..." id="namaBarang" name="namaBarang">
        </div>
        <div class="mb-3">
        <input type="text" class="form-control" placeholder="Deskripsi barang..." id="deskripsiBarang" name="deskripsiBarang">
        </div>
        <div class="mb-3">
        <input type="text" class="form-control" placeholder="Harga..." id="harga" name="harga">
        </div>
        <button class="btn btn-info" type="submit" id="tambah" name="tambah">Simpan Data Klik Disini</button>
    </form>
    @if(session('success'))
        <script>
            alert("{{session('success')}}");
            window.location.href = '/';
        </script>
    @endif
    </div>
@endsection