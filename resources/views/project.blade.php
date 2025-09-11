@include('layouts.header', ['title' => 'Home Page'])

<link rel="stylesheet" href="{{ asset('css/project.css') }}"> 

<div class="project-section">
    <h2 class="section-title">OUR PROJECT</h2>

    <h3 class="project-title">{{ $project->title }}</h3>

    <p class="project-description">
        {{ $project->description }}
    </p>

    <p><strong>Website:</strong> <a href="{{ $project->website_link }}">{{ $project->website_link }}</a></p>
    <p><strong>Android App:</strong> <a href="{{ $project->android_app_link }}">{{ $project->android_app_link }}</a></p>
    <p><strong>iOS App:</strong> <a href="{{ $project->ios_app_link }}">{{ $project->ios_app_link }}</a></p>
</div>

