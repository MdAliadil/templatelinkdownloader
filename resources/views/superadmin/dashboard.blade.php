{{-- resources/views/superadmin/dashboard.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container pt-0">
    <h1 class="mb-4">Super Admin Dashboard</h1>

    <div class="row">
        <!-- Total Admins -->
        <div class="col-md-3 mb-3">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h5 class="card-title text-white">Total Admins</h5>
                    <p class="card-text fs-3">{{ $totalAdmins }}</p>
                    <a href="" class="btn btn-light">View Admins</a>
                </div>
            </div>
        </div>

        <!-- Total Users -->
        <div class="col-md-3 mb-3">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h5 class="card-title">Total Users</h5>
                    <p class="card-text fs-3">{{ $totalUsers }}</p>
                    <a href="" class="btn btn-light">Edit Users</a>
                </div>
            </div>
        </div>

        <!-- Total Visiting Cards -->
        <div class="col-md-3 mb-3">
            <div class="card text-white bg-info">
                <div class="card-body">
                    <h5 class="card-title">Total Cards</h5>
                    <p class="card-text fs-3">{{ $totalCards }}</p>
                    <a href="" class="btn btn-light">Add Cards</a>
                </div>
            </div>
        </div>

        <!-- Other Stat (Customize) -->
        <div class="col-md-3 mb-3">
            <div class="card  bg-dark">
                <div class="card-body">
                    <h5 class="card-title text-white">Other</h5>
                    <p class="card-text fs-3">0</p>
                    <a href="" class="btn btn-light">Methods</a>
                </div>
            </div>
        </div>
    </div>

  
    <div class="mt-5">
        <h3>Recent Users</h3>
        <ul class="list-group">
            @foreach ($recentUsers as $user)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $user->name }} ({{ $user->email }})
                    <span class="badge bg-secondary">{{ ucfirst($user->roles->pluck('name')->first()) }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
