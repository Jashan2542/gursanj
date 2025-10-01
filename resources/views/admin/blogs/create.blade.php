<link rel="stylesheet" href="{{ asset('css/blog-form.css') }}">

<div class="container mt-4">
    <h2 class="mb-3">Add New Blog</h2>

   <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    {{-- Title --}}
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
        @error('title') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    {{-- Subject --}}
    <div class="mb-3">
        <label class="form-label">Subject</label>
        <input type="text" name="subject" class="form-control" value="{{ old('subject') }}" required>
        @error('subject') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    {{-- Description --}}
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" id="description" class="form-control" rows="6">{{ old('description') }}</textarea>
        @error('description') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    {{-- Blog Image --}}
    <div class="mb-3">
        <label class="form-label">Blog Image</label>
        <input type="file" name="image" class="form-control">
        @error('image') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    {{-- Submit & Cancel --}}
    <button type="submit" class="btn btn-success">Save Blog</button>
    <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Cancel</a>
</form>

{{-- CKEditor --}}
<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
<script>
    let editorInstance;

    ClassicEditor
        .create(document.querySelector('#description'))
        .then(editor => {
            editorInstance = editor;
        })
        .catch(error => {
            console.error(error);
        });

    // Sync editor data to textarea on submit
    document.querySelector('form').addEventListener('submit', function () {
        document.querySelector('#description').value = editorInstance.getData();
    });
</script>

