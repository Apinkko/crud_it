@extends('layouts.default')

@section('title', 'Detail Category Sub')

@section('content')
<h1 class="text-center mb-3">Show Category Sub</h1>
<div class="card">
    <div class="card-body">
        <div class="row mb-4">
            <div class="col-md-2">
                <label for="name" class="form-label">Name</label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="name" id="name" value="{{ $category_sub->name }}"
                    disabled>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-2">
                <label for="name" class="form-label">Category</label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="name" id="name"
                    value="{{ $category_sub->category->name }}" disabled>
            </div>
        </div>
        <a href="{{ route('category_subs.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>

@endsection