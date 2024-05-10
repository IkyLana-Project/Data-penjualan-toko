@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Toko') }}</div>

                <div class="card-body">
                    <h1 class="text-warning">Data Toko Rikyy</h1>
                    <a href="/toko/create" class="btn btn-info">Tambah data</a>
                    <table class="table table-hover">
                        <thead>
                            <th>ID</th>
                            <th>Nama Barang</th>
                            <th>Deskripsi Barang</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                            <th>Hapus</th>
                        </thead>
                        <tbody>
                            @foreach($toko as $barang)
                            <tr>
                                <td>{{ $barang->idBarang }}</td>
                                <td>{{ $barang->namaBarang }}</td>
                                <td>{{ $barang->deskripsiBarang }}</td>
                                <td>{{ $barang->harga }}</td>
                                <td><a href="/toko/{{$barang->idBarang}}" class="btn btn-warning">Edit</a></td>
                                <td>
                                    <form action="/toko/{{$barang->idBarang}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Delete" class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection