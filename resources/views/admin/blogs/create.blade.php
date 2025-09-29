<link rel="stylesheet" href="{{ asset('css/blog-form.css') }}">

<div class="container mt-4">
    <h2 class="mb-3">Add New Blog</h2>

    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Subject</label>
            <input type="text" name="subject" class="form-control" value="{{ old('subject') }}" required>
            @error('subject') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>

            <!-- Only one description box -->
            <textarea name="description" id="description" class="form-control" rows="6" required>{{ old('description') }}</textarea>

            @error('description') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

            <!-- Toolbar -->
            <div class="mb-2">
                <button type="button" class="btn btn-sm btn-primary" onclick="wrapText('b')"><b>B</b></button>
                <button type="button" class="btn btn-sm btn-primary" onclick="wrapText('u')"><u>U</u></button>
            </div>

        <div class="mb-3">
            <label class="form-label">Blog Image</label>
            <input type="file" name="image" class="form-control">
            @error('image') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="btn btn-success">Save Blog</button>
        <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<script>
    function wrapText(tag) {
        let textarea = document.getElementById("description");
        let start = textarea.selectionStart;
        let end = textarea.selectionEnd;
        let text = textarea.value;
        let before = text.substring(0, start);
        let selected = text.substring(start, end);
        let after = text.substring(end, text.length);
        textarea.value = before + `<${tag}>` + selected + `</${tag}>` + after;
    }
</script>
