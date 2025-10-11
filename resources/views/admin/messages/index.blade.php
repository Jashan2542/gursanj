<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/message.css') }}">
    <title>Document</title>
</head>
<body>


<div class="messages-container">
    <h2 class="messages-title">All Messages</h2>

    <div>
     <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">← Back</a>
    </div>

    <div class="table-wrapper">
        <table class="messages-table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Service</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($messages as $msg)
                    <tr>
                        <td>{{ $msg->title }}</td>
                        <td>{{ $msg->service }}</td>
                        <td>{{ $msg->name }}</td>
                        <td>{{ Str::limit($msg->description, 50) }}</td>
                        <td>
                        <a href="{{ route('admin.messages.show', $msg->id) }}" class="btn-view">View</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="no-data">No messages found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="pagination-box">
        {{ $messages->links() }}
    </div>
</div>

</body>
</html>