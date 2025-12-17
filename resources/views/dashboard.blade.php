@extends('layouts.admin-layout')

@section('title', 'Dashboard')

@section('content')
    <div class="p-3">
        <h2 class="mb-4">Welcome to the Admin Dashboard</h2>
        <p>Select a section from the sidebar to manage categories or meals.</p>

        <div class="row g-3 mt-4">
            <div class="col-sm-6 col-md-4">
                <a href="{{ route('categories.index') }}" class="text-decoration-none">
                    <div class="dashboard-card p-4 text-center bg-white shadow-sm rounded">
                        <i class="bi bi-tags-fill mb-2"></i>
                        <h5 class="mb-0">Categories</h5>
                        <p class="text-muted small mt-1">Manage all categories</p>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a href="{{ route('meals.index') }}" class="text-decoration-none">
                    <div class="dashboard-card p-4 text-center bg-white shadow-sm rounded">
                        <i class="bi bi-basket-fill mb-2"></i>
                        <h5 class="mb-0">Meals</h5>
                        <p class="text-muted small mt-1">Manage all meals</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
