<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>

    <!-- ===== Navbar ===== -->
    <header class="admin-header">
        <div class="admin-nav">
            <a href="{{ route('admin.dashboard') }}" class="admin-logo">🌐 Admin Panel</a>

            <form method="POST" action="{{ route('admin.logout') }}" class="logout-section">
                @csrf
                <button type="submit" class="logout-button">Logout</button>
            </form>
        </div>
    </header>

    <!-- ===== Dashboard ===== -->
    <main class="admin-dashboard">
        <h2 class="dashboard-title">Welcome, {{ Auth::guard('admin')->user()->name }}</h2>

        <div class="dashboard-grid">
            <!-- Projects -->
            <div class="dashboard-card">
                <div class="card-icon">📁</div>
                <h3 class="card-title">Projects</h3>
                <p class="card-text">Manage all project details here.</p>
                <div class="card-actions">
                    <a href="{{ route('admin.projects.index') }}" class="btn-primary">View Projects</a>
                    <a href="{{ route('admin.projects.create') }}" class="btn-success">Add Project</a>
                </div>
            </div>

            <!-- Blogs -->
            <div class="dashboard-card">
                <div class="card-icon">📝</div>
                <h3 class="card-title">Blogs</h3>
                <p class="card-text">Manage all blog posts here.</p>
                <div class="card-actions">
                    <a href="{{ route('admin.blogs.index') }}" class="btn-primary">View Blogs</a>
                    <a href="{{ route('admin.blogs.create') }}" class="btn-success">Add Blog</a>
                </div>
            </div>

            <!-- Enquiry -->
            <div class="dashboard-card">
                <div class="card-icon">📨</div>
                <h3 class="card-title">Enquiry</h3>
                <p class="card-text">View all user contact form messages.</p>
                <div class="card-actions">
                    <a href="{{ route('admin.messages.index') }}" class="btn-primary">View Messages</a>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
