@include('layouts.header', ['title' => 'Home Page'])

<link rel="stylesheet" href="{{ asset('css/project.css') }}">

<div class="project-section">
    <h2 class="section-title">OUR PROJECTS</h2>

    @foreach($projects as $project)
        <div class="single-project">
            <h3 class="project-title">{{ $project->title }}</h3>

            <p class="project-description">
                {{ $project->description }}
            </p>

            @if($project->website_link)
                <p><strong>Website:</strong>
                    <a href="{{ $project->website_link }}" target="_blank">
                        {{ $project->website_link }}
                    </a>
                </p>
            @endif

            @if($project->android_link)
                <p><strong>Android App:</strong>
                    <a href="{{ $project->android_link }}" target="_blank">
                        {{ $project->android_link }}
                    </a>
                </p>
            @endif

            @if($project->ios_link)
                <p><strong>iOS App:</strong>
                    <a href="{{ $project->ios_link }}" target="_blank">
                        {{ $project->ios_link }}
                    </a>
                </p>
            @endif
        </div>
        <hr>
    @endforeach
</div>


