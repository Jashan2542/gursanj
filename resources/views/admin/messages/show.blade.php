<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/message-show.css') }}">
    <title>Document</title>
</head>
<body>
<div class="dashboard">
    <h2 class="page-title">Message Details</h2>

    <div class="message-card">
        <div class="message-info">
            <!-- Left Side -->
            <div class="info-left">
                <p><span class="label">Title:</span> <span class="value">{{ $message->title }}</span></p>
                <p><span class="label">Service:</span> <span class="value">{{ $message->service }}</span></p>
                <p><span class="label">Date:</span> <span class="value">{{ $message->created_at->format('d M Y, h:i A') }}</span></p>
            </div>

            <!-- Right Side -->
            <div class="info-right">
                <p><span class="label">Name:</span> <span class="value">{{ $message->name }}</span></p>
                <p><span class="label">Phone:</span> <span class="value">{{ $message->phone }}</span></p>
                <p><span class="label">Email:</span> <span class="value">{{ $message->email }}</span></p>
            </div>
        </div>

        <!-- Description -->
        <div class="desc-section">
            <h4>Description</h4>
            <div class="desc-box">{{ $message->description }}</div>
        </div>

        <a href="{{ route('admin.messages.index') }}" class="btn back-btn">← Back to Messages</a>
    </div>
</div>

</body>
</html>