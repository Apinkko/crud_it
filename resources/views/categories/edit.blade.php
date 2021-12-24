@extends('layouts.default')

@section('title', 'Edit Category')

@section('content')
<h1 class="text-center mb-3">Edit Category</h1>
<div class="card">
    <div class="card-body">
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="row mb-4">
                <div class="col-md-2">
                    <label for="name" class="form-label">Name</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection