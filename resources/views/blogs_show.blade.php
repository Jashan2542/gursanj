@include('layouts.header', ['title' => $blog->title])

<link rel="stylesheet" href="{{ asset('css/blog-show.css') }}">

<div class="blog-detail">
    <div class="blog-content">
       @if ($blog->updated_at->gt($blog->created_at))
        <span class="blog-date" title="Updated on {{ $blog->updated_at->format('d M Y, h:i A') }}">
            Updated {{ $blog->updated_at->diffForHumans() }}
        </span>
    @else
        <span class="blog-date" title="Posted on {{ $blog->created_at->format('d M Y, h:i A') }}">
            {{ $blog->created_at->diffForHumans() }}
        </span>
    @endif

    <div class="blog-image">
        @if($blog->image)
            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
        @endif
    </div>

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
