@extends('layout.list')

@section('title', 'Product List')

@section('content')
    <h1>Product List</h1>
    <p>Product ID: {{ $id }}</p>
    <p>Product Name: {{ $product }}</p>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $id }}</td>
                <td>{{ $product }}</td>
                <td>$65.15</td>
            </tr>
        </tbody>
    </table>
    <div><h1>Input Produk</h1></div>
<form method="POST" action="{{ route('produk.simpan') }}">
    @csrf
    <table class="table">
        <tr>
            <td>Nama:</td>
            <td colspan="3">
                <input type="text" class="form-control" id="nama" name="nama">
            </td>
        </tr>
        <tr>
            <td>Deskripsi:</td>
            <td colspan="3">
                <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
            </td>
        </tr>
        <tr>
            <td>Harga:</td>
            <td>
                <input type="number" class="form-control" id="harga" name="harga">
            </td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection
