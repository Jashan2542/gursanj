@include('layouts.header', ['title' => 'Blogs Page']) 

<link rel="stylesheet" href="{{ asset('css/blogs.css') }}">

<div class="container py-5">
    <h2>Our Blogs</h2>

    <div class="blog-grid">
        @foreach($blogs as $blog)
        <form action="{{ route('user.blogs.show', $blog->id) }}" method="GET" class="blog-form">
            <button type="submit" class="blog-card btn-card">
                {{-- Blog Image --}}
                @if($blog->image)
                    <div class="blog-card-img" style="background-image: url('{{ asset('storage/' . $blog->image) }}')"></div>
                @else
                    <div class="blog-card-img" style="background-image: url('https://via.placeholder.com/600x300')"></div>
                @endif

                {{-- Blog Content --}}
              <div class="blog-card-body">
                   <span class="blog-subject">{{ Str::limit(strip_tags($blog->subject), 25) }}</span>
                   <h5 class="blog-title">{{ Str::limit(strip_tags($blog->title), 25) }}</h5>
                   <p class="blog-desc">{{ Str::limit(strip_tags($blog->description), 100) }}</p>
              </div>

            </button>
        </form>
        @endforeach
    </div>

    {{-- Pagination --}}
    <div class="d-flex justify-content-center mt-4">
        {{ $blogs->links() }}
    </div>
</div>
