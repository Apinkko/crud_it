@extends('layouts.default')

@section('title', 'Add Category')

@section('content')
<h1 class="text-center mb-3">Add Category</h1>
<div class="card">
    <div class="card-body">
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="row mb-4">
                <div class="col-md-2">
                    <label for="name" class="form-label">Name</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="name" id="name    ">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection