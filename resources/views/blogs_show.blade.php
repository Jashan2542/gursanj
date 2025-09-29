@include('layouts.header', ['title' => $blog->title])

<link rel="stylesheet" href="{{ asset('css/blog-show.css') }}">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="blog-detail">
                {{-- Blog Image --}}
                @if($blog->image)
                    <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid rounded mb-4" alt="{{ $blog->title }}">
                @endif

                {{-- Blog Title --}}
                <h1 class="fw-bold mb-3">{{ $blog->title }}</h1>

                {{-- Subject + Date --}}
                <div class="text-muted mb-3">
                    <span class="badge bg-secondary">{{ $blog->subject }}</span>
                    <small class="ms-2">{{ $blog->published_at ? $blog->published_at->format('d M Y, h:i A') : '' }}</small>
                </div>

                {{-- Blog Description --}}
                <p class="blog-desc">{!! strip_tags($blog->description, '<b><u>') !!}</p>
            </div>
        </div>
    </div>
</div>
