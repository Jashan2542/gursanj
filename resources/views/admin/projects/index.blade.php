<link rel="stylesheet" href="{{ asset('css/index.css') }}">

<table class="table table-bordered custom-table">
    <thead class="table-dark">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Website</th>
            <th>Android</th>
            <th>iOS</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($projects as $project)
            <tr>
                <td class="title-col">{{ $project->title }}</td>
                <td class="desc-col">{{ $project->description }}</td>
                <td>
                    @if($project->website_link)
                        <a href="{{ $project->website_link }}" target="_blank" class="link-btn">Website</a>
                    @endif
                </td>
                <td>
                    @if($project->android_link)
                        <a href="{{ $project->android_link }}" target="_blank" class="link-btn">Android</a>
                    @endif
                </td>
                <td>
                    @if($project->ios_link)
                        <a href="{{ $project->ios_link }}" target="_blank" class="link-btn">iOS</a>
                    @endif
                </td>
                <td class="action-col">
                    <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this project?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">No projects found</td>
            </tr>
        @endforelse
    </tbody>
</table>
