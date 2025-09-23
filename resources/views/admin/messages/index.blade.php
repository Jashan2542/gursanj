<link rel="stylesheet" href="{{ asset('css/message.css') }}">

<div class="messages-container">
    <h2 class="messages-title">All Messages</h2>

    <div class="table-wrapper">
        <table class="messages-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Service</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Description</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @forelse($messages as $msg)
                    <tr>
                        <td>{{ $msg->id }}</td>
                        <td>{{ $msg->title }}</td>
                        <td>{{ $msg->service }}</td>
                        <td>{{ $msg->name }}</td>
                        <td>{{ $msg->phone }}</td>
                        <td>{{ $msg->email }}</td>
                        <td>{{ Str::limit($msg->description) }}</td>
                        <td>{{ $msg->created_at->format('d M Y') }}</td>
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
