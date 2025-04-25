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
@endsection
