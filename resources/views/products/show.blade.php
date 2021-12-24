@extends('layouts.default')

@section('title', 'Detail Product')

@section('content')
<h1 class="text-center mb-3">Product</h1>
<div class="card">
    <div class="card-body">
        <div class="row mb-4">
            <div class="col-md-2">
                <label for="name" class="form-label">Name</label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}" disabled>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-2">
                <label for="name" class="form-label">Category</label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="name" id="name" value="{{ $product->category->name }}"
                    disabled>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-2">
                <label for="name" class="form-label">Category Sub</label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="name" id="name" value="{{ $product->category_sub->name }}"
                    disabled>
            </div>
        </div>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>

@endsection