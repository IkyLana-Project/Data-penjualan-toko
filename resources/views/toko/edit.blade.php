@extends('layouts.master')

@section('content')
<div class="container">
    <h1 class="text-warning">Edit Data Toko</h1>
    <form action="/toko/{{$toko->idBarang}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
        <input type="text" class="form-control" placeholder="Nama barang..." id="namaBarang" name="namaBarang" value="{{ $toko->namaBarang }}">
        </div>
        <div class="mb-3">
        <input type="text" class="form-control" placeholder="Deskripsi barang..." id="deskripsiBarang" name="deskripsiBarang" value="{{ $toko->deskripsiBarang }}">
        </div>
        <div class="mb-3">
        <input type="text" class="form-control" placeholder="Harga..." id="harga" name="harga" value="{{ $toko->harga}}">
        </div>
        <button class="btn btn-info" type="submit" id="tambah" name="tambah">Update Data Klik Disini</button>
    </form>
    @if(session('success'))
        <script>
            alert("{{ session('success') }}");
            window.location.href = '/Sedang menentukan arah tujuan...';
        </script>
    @endif
</div>
@endsection