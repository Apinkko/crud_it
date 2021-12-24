@extends('layouts.default')

@section('title', 'Detail Category')

@section('content')


<h1 class="text-center mb-3">Show Category</h1>
<div class="card">
    <div class="card-body">
        <div class="row mb-4">
            <div class="col-md-2">
                <label for="name" class="form-label">Name</label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}" disabled>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-2">
                <label for="name" class="form-label">Category</label>
            </div>
            <div class="col-md-6">
                @foreach ($category->category_subs as $sub)
                <input type="text" class="form-control mb-4" name="name" id="name" value="{{ $sub->name }}" disabled>
                @endforeach
            </div>
        </div>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>

@endsection