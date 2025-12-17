@extends('layouts.admin-layout')
@section('title', 'Create Category')
@section('content')

<div class="container">
    <h2 class="mb-4">Add Category</h2>

    <form method="POST" action="{{ route('categories.store') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" 
                   id="name" 
                   name="name" 
                   value="{{ old('name') }}" 
                   class="form-control @error('name') is-invalid @enderror"
                   placeholder="Enter category name">

            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">
            <i class="bi bi-plus-circle me-1"></i> Save
        </button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary ms-2">
            <i class="bi bi-arrow-left me-1"></i> Back
        </a>
    </form>
</div>

@endsection
