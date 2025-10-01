@include('layouts.header', ['title' => $blog->title])

<link rel="stylesheet" href="{{ asset('css/blog-show.css') }}">

<div class="blog-detail">
    <div class="blog-image">
        @if($blog->image)
            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
        @endif
    </div>

    <div class="blog-content">
        <h1 class="blog-title">{{ $blog->title }}</h1>
        <div class="blog-meta">
            <span class="blog-subject">{{ $blog->subject }}</span>
            <span class="blog-date">
                {{ $blog->published_at ? $blog->published_at->format('d M Y, h:i A') : '' }}
            </span>
        </div>

        <div class="blog-desc">
            {!! $blog->description !!}
        </div>
    </div>
</div>
