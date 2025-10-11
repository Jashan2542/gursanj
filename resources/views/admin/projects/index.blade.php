<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Document</title>
</head>
<body>
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="page-title">Manage Projects</h2>
        <div class="btn-group">
            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">← Back</a>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-secondary">+ New Project</a>
        </div>
    </div>

    <table class="table custom-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th class="hide-mobile">Website</th> 
                <th class="hide-mobile">Android</th>
                <th class="hide-mobile">iOS</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($projects as $project)
                <tr>
                    <td class="title-col">{{ $project->title }}</td>
                    <td class="desc-col">{{ Str::limit($project->description, 80) }}</td>
                    <td class="hide-mobile">
                        @if($project->website_link)
                            <a href="{{ $project->website_link }}" target="_blank" class="link-btn">Website</a>
                        @endif
                    </td>
                    <td class="hide-mobile">
                        @if($project->android_link)
                            <a href="{{ $project->android_link }}" target="_blank" class="link-btn">Android</a>
                        @endif
                    </td>
                    <td class="hide-mobile">
                        @if($project->ios_link)
                            <a href="{{ $project->ios_link }}" target="_blank" class="link-btn">iOS</a>
                        @endif
                    </td>
                    <td class="action-col">
                        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this project?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center text-muted">No projects found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

</body>
</html>