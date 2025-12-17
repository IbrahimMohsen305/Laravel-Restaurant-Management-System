@extends('layouts.admin-layout')
@section('title', 'Meals')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Meals</h2>
            <a href="{{ route('meals.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle me-1"></i> Add Meal
            </a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Responsive Table for Desktop -->
        <div class="table-responsive d-none d-md-block">
            <table class="table table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($meals as $meal)
                        <tr>
                            <td>{{ $meal->name }}</td>
                            <td>${{ $meal->price }}</td>
                            <td>{{ $meal->category->name }}</td>
                            <td>
                                @if ($meal->image)
                                    <img src="{{ asset('storage/' . $meal->image) }}" width="80" class="rounded">
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('meals.edit', $meal) }}" class="btn btn-warning btn-sm mb-1">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <form action="{{ route('meals.destroy', $meal) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Card View for Mobile -->
        <div class="d-md-none">
            @foreach ($meals as $meal)
                <div class="card mb-3 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $meal->name }} - ${{ $meal->price }}</h5>
                        <p class="card-text"><strong>Category:</strong> {{ $meal->category->name }}</p>
                        @if ($meal->image)
                            <img src="{{ asset('storage/' . $meal->image) }}" class="img-fluid rounded mb-2">
                        @endif
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('meals.edit', $meal) }}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                            <form action="{{ route('meals.destroy', $meal) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
