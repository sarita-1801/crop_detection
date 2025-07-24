@extends('template.template')

@section('pagecontent')
<!-- ... (keep your styles) ... -->

<!-- Admin Dashboard Header -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="bg-dark text-white p-5">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-5 mb-3">Admin Dashboard</h1>
                    <p class="mb-0">Welcome back, Administrator. Here's what's happening with your system today.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <div class="d-inline-flex align-items-center">
                        <div class="ms-3">
                            <p class="mb-0">Last Login</p>
                            <h6 class="mb-0">Today, {{ auth()->user()->last_login_at ? auth()->user()->last_login_at->format('h:i A') : 'First login' }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Stats Overview -->
<div class="container-xxl py-3">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white p-4 rounded shadow-sm stat-card h-100">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h2 class="mb-0">{{ $stats['total_users'] }}</h2>
                            <p class="text-muted mb-0">Total Users</p>
                        </div>
                        <div class="bg-primary bg-opacity-10 p-3 rounded">
                            <i class="fa fa-users text-primary fa-2x"></i>
                        </div>
                    </div>
                    <div class="mt-3">
                        <span class="text-success"><i class="fa fa-arrow-up me-1"></i> {{ $stats['new_users'] }} new</span>
                        <span class="text-muted ms-2">Since last month</span>
                    </div>
                </div>
            </div>
            <!-- Other stat cards with dynamic data -->
        </div>
    </div>
</div>

<!-- Recent Users Section -->
<div class="container-xxl py-5 bg-light">
    <div class="container">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-3">Recent Users</h1>
            <p>Newly registered users in the system</p>
        </div>
        <div class="row g-4">
            @foreach($recentUsers as $user)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <img class="rounded-circle mb-3" src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=random" alt="{{ $user->name }}" width="80">
                        <h5 class="mb-1">{{ $user->name }}</h5>
                        <p class="text-muted mb-2">{{ ucfirst($user->role) }}</p>
                        <p class="mb-2"><small class="text-muted"><i class="fa fa-calendar me-1"></i> Joined {{ $user->created_at->diffForHumans() }}</small></p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-sm btn-outline-primary me-1" href="mailto:{{ $user->email }}"><i class="fa fa-envelope"></i></a>
                            <a class="btn btn-sm btn-outline-primary me-1" href="#"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-sm btn-outline-primary" href="#"><i class="fa fa-edit"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Recent Detections with dynamic data -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="card border-0 shadow-sm mb-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="card-header bg-white border-0 py-3">
                <h5 class="mb-0">Recent Detections</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Crop</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recentDetections as $detection)
                            <tr>
                                <td>#D-{{ $detection->id }}</td>
                                <td>{{ $detection->user->name }}</td>
                                <td>{{ $detection->crop_type }}</td>
                                <td>
                                    @switch($detection->status)
                                        @case('pending')
                                            <span class="badge bg-warning">Pending</span>
                                            @break
                                        @case('completed')
                                            <span class="badge bg-success">Completed</span>
                                            @break
                                        @default
                                            <span class="badge bg-secondary">Unknown</span>
                                    @endswitch
                                </td>
                                <td><a href="#" class="btn btn-sm btn-outline-primary">View</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pagination Links -->
<div class="mt-4">
    {{ $recentUsers->links() }}
</div>
<div class="mt-4">
    {{ $recentDetections->links() }}
</div>

@endsection