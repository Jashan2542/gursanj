@include('layouts.header', ['title' => 'Blogs Page']) 

<link rel="stylesheet" href="{{ asset('css/blogs.css') }}">

<div class="container py-5">
    <h2 class="mb-4 text-center fw-bold">Our Blogs</h2>

    <div class="row g-4">
        @foreach($blogs as $blog)
        <div class="col-md-4">
            <div class="card blog-card border-0 shadow-sm h-100">
                {{-- Blog Image --}}
                @if($blog->image)
                    <img src="{{ asset('storage/' . $blog->image) }}" class="card-img-top" alt="{{ $blog->title }}">
                @else
                    <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="No Image">
                @endif

                {{-- Card Body --}}
                <div class="card-body d-flex flex-column">
                    <span class="badge bg-secondary mb-2">{{ $blog->subject }}</span>
                    <h5 class="card-title">{{ $blog->title }}</h5>
                    <p class="card-text text-muted">
                        {{ Str::limit($blog->description, 100) }}
                    </p>
                    <a href="{{ route('user.blogs.show', $blog->id) }}" class="stretched-link"></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- Pagination --}}
    <div class="d-flex justify-content-center mt-4">
        {{ $blogs->links() }}
    </div>
</div>
