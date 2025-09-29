<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>

<nav class="navbar">
    <div class="container">
        <a class="brand" href="{{ route('admin.dashboard') }}">Admin Panel</a>
        
        <!-- Logout on Right -->
        <form method="POST" action="{{ route('admin.logout') }}" class="logout-form">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>
</nav>

<div class="dashboard">
    <h2>Welcome, {{ Auth::guard('admin')->user()->name }}</h2>

    <div class="cards">
        <!-- Projects Card -->
        <div class="card">
            <h3>Projects</h3>
            <p>Manage all project details here.</p>
            <a href="{{ route('admin.projects.index') }}" class="btn primary">View Projects</a>
            <a href="{{ route('admin.projects.create') }}" class="btn success">Add Project</a>
        </div>

        <!-- Blogs Card -->
        <div class="card">
            <h3>Blogs</h3>
            <p>Manage all blog posts here.</p>
            <a href="{{ route('admin.blogs.index') }}" class="btn primary">View Blogs</a>
            <a href="{{ route('admin.blogs.create') }}" class="btn success">Add Blog</a>
        </div>

        <!-- Messages Card -->
        <div class="card">
            <h3>Enquiry</h3>
            <p>View all user contact form messages.</p>
            <a href="{{ route('admin.messages.index') }}" class="btn primary">View Messages</a>
        </div>
    </div>
</div>

</body>
</html>
