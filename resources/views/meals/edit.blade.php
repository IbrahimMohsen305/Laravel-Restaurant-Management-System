@extends('layouts.admin-layout')
@section('title', 'Edit Meal')
@section('content')

<div class="container">
    <h2 class="mb-4">Edit Meal</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('meals.update', $meal) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Meal Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $meal->name) }}" 
                   class="form-control @error('name') is-invalid @enderror">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" 
                      class="form-control @error('description') is-invalid @enderror" rows="3">{{ old('description', $meal->description) }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" id="price" name="price" value="{{ old('price', $meal->price) }}" step="0.01"
                   class="form-control @error('price') is-invalid @enderror">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select id="category_id" name="category_id" class="form-select @error('category_id') is-invalid @enderror">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" 
                        {{ $category->id == old('category_id', $meal->category_id) ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror">
            @if ($meal->image)
                <img src="{{ asset('storage/' . $meal->image) }}" width="120" class="mt-2 rounded">
            @endif
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">
            <i class="bi bi-check-circle me-1"></i> Update
        </button>
        <a href="{{ route('meals.index') }}" class="btn btn-secondary ms-2">
            <i class="bi bi-arrow-left me-1"></i> Back
        </a>
    </form>
</div>

@endsection
