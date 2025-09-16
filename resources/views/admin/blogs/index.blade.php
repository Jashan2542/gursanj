<link rel="stylesheet" href="{{ asset('css/blog.css') }}">

<div class="container mt-4">
    <h2 class="mb-3">Manage Blogs</h2>
    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary mb-3">Add New Blog</a>

    <table class="table table-bordered custom-table">
        <thead class="table-dark">
    <tr>
        <th>Image</th>
        <th>Title</th>
        <th>Description</th>
        <th>Subject</th>
        <th>Date & Time</th>
        <th>Actions</th>
    </tr>
</thead>
<tbody>
@forelse($blogs as $blog)
    <tr>
        <td>
            @if($blog->image)
                <img src="{{ asset('storage/'.$blog->image) }}" alt="Blog Image" width="80">
            @else
                <span class="text-muted">No Image</span>
            @endif
        </td>
        <td>{{ $blog->title }}</td>
        <td>{{ Str::limit($blog->description, 50) }}</td>
        <td>{{ $blog->subject }}</td>
        <td>{{ $blog->published_at ? $blog->published_at->format('d M Y, h:i A') : '-' }}</td>
        <td> ... actions ... </td>
    </tr>
@empty
    <tr><td colspan="6" class="text-center">No blogs found</td></tr>
@endforelse
</tbody>
    </table>

    <div class="mt-3">
        {{ $blogs->links() }}
    </div>
</div>