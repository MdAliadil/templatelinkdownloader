
@extends('layouts.app')

@section('content')
<div class="container pt-0">
    <h1 class="mb-4"> Admin Dashboard</h1>

    {{--  <div class="row">
        
        <div class="col-md-3 mb-3">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h5 class="card-title text-white">Today Traffic</h5>
                   
                </div>
            </div>
        </div>

        <!-- Total Users -->
        <div class="col-md-3 mb-3">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h5 class="card-title">Total Users</h5>
                    <p class="card-text fs-3">{{ $totalUsers }}</p>
                    <a href="" class="btn btn-light">Remove Users</a>
                </div>
            </div>
        </div>

        <!-- Total Visiting Cards -->
        <div class="col-md-3 mb-3">
            <div class="card text-white bg-info">
                <div class="card-body">
                    <h5 class="card-title">Total Cards</h5>
                    <p class="card-text fs-3">{{ $totalCards }}</p>
                    <a href="" class="btn btn-light"> Cards</a>
                </div>
            </div>
        </div>

        <!-- Other Stat (Customize) -->
        <div class="col-md-3 mb-3">
            <div class="card  bg-dark">
                <div class="card-body">
                    <h5 class="card-title text-white">Other</h5>
                    <p class="card-text fs-3">0</p>
                    <a href="" class="btn btn-light">Edit Actions</a>
                </div>
            </div>
        </div>
    </div>  --}}

  
    <div class="mt-5">
        <h3>Recent Users</h3>
        {{--  <ul class="list-group">
            @foreach ($recentUsers as $user)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $user->name }} ({{ $user->email }})
                    <span class="badge bg-secondary">{{ ucfirst($user->roles->pluck('name')->first()) }}</span>
                </li>
            @endforeach
        </ul>  --}}
    </div>
</div>
@endsection
