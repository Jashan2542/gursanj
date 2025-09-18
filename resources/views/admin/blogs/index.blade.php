<link rel="stylesheet" href="{{ asset('css/blog.css') }}">

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="page-title">Manage Blogs</h2>
        <div class="btn-group">
            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">← Back</a>
            <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">+ Add New Blog</a>
        </div>
    </div>

    <table class="table custom-table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Description</th>
                <th>Subject</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse($blogs as $blog)
            <tr>
                <td>
                    @if($blog->image)
                        <img src="{{ asset('storage/'.$blog->image) }}" alt="Blog Image" class="table-img">
                    @else
                        <span class="text-muted">No Image</span>
                    @endif
                </td>
                <td>{{ $blog->title }}</td>
                <td>{{ Str::limit($blog->description, 50) }}</td>
                <td>{{ $blog->subject }}</td>
                <td>
                    <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this blog?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="6" class="text-center text-muted">No blogs found</td></tr>
        @endforelse
        </tbody>
    </table>

    <div class="mt-3 pagination-wrapper">
        {{ $blogs->links() }}
    </div>
</div>
