<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Admin Panel</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <h2>Welcome, {{ Auth::guard('admin')->user()->name }}</h2>

    <div class="row mt-4">
        {{-- Projects Card --}}
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body text-center">
                    <h5 class="card-title">Projects</h5>
                    <p class="card-text">Manage all project details here.</p>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">View Projects</a>
                    <a href="{{ route('admin.projects.create') }}" class="btn btn-success mt-2">Add Project</a>
                </div>
            </div>
        </div>

        {{-- Blogs Card --}}
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body text-center">
                    <h5 class="card-title">Blogs</h5>
                    <p class="card-text">Manage all blog posts here.</p>
                    <a href="{{ route('admin.blogs.index') }}" class="btn btn-primary">View Blogs</a>
                    <a href="{{ route('admin.blogs.create') }}" class="btn btn-success mt-2">Add Blog</a>
                </div>
            </div>
        </div>

        {{-- Messages Card --}}
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body text-center">
                    <h5 class="card-title">Inspection</h5>
                    <p class="card-text">View all user contact form messages.</p>
                    <a href="{{ route('admin.messages.index') }}" class="btn btn-primary">View Messages</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
