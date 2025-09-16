@include('layouts.header', ['title' => 'Blog Page']) 

<link rel="stylesheet" href="{{ asset('css/blogs.css') }}">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            {{-- Blog Title --}}
            <h1 class="fw-bold mb-3">{{ $blog->title }}</h1>

            {{-- Meta Info --}}
            <p class="text-muted">
                {{ $blog->subject }} • Published on {{ $blog->created_at->format('M d, Y') }}
            </p>

            {{-- Blog Image --}}
            @if($blog->image)
                <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid rounded mb-4" alt="{{ $blog->title }}">
            @endif

            {{-- Blog Description --}}
            <div class="blog-content">
                {!! nl2br(e($blog->description)) !!}
            </div>

            {{-- Back Button --}}
            <a href="{{ route('user.blogs.index') }}" class="btn btn-outline-secondary mt-4">← Back to Blogs</a>

        </div>
    </div>
</div>

