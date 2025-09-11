<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header text-center">
                    <h4>Add New Project</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.projects.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label>Website Link</label>
                            <input type="url" name="website_link" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Android App Link</label>
                            <input type="url" name="android_link" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>iOS App Link</label>
                            <input type="url" name="ios_link" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-success w-100">Save Project</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
