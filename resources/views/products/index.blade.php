@extends('layouts.default')

@section('title', 'Product')

@section('content')
{{-- @dd($products) --}}
<h1 class="text-center">Product</h1>
<a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add Data</a>
<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Category Sub</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->category_sub->name }}</td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-info">Detail</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection