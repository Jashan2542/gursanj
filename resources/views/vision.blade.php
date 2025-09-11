@include('layouts.header', ['title' => 'Our Team']) <!-- Include header layout with dynamic title -->

<link rel="stylesheet" href="{{ asset('css/vision.css') }}"> <!-- Vision page specific CSS -->

<section>
    <div class="vision-section"> <!-- Vision section container -->
        <div class="vision-content"> <!-- Vision text content -->
            <h1 class="vision-title">VISION</h1> <!-- Vision title -->
            <p class="vision-text">
                Our vision is to drive innovation that creates meaningful solutions 
                for businesses and individuals. We aim to shape a future built on 
                creativity, sustainability, and progress, making a positive impact on the world.
            </p>
        </div>
        <div class="vision-image"> <!-- Vision image -->
            <img src="{{ asset('images/vision.png') }}" alt="Team Vision">
        </div>
    </div>

    <div class="mission-section"> <!-- Mission section container -->
        <div class="mission-header"> <!-- Mission text content -->
            <h1 class="mission-title">MISSION</h1> <!-- Mission title -->
            <p class="mission-text">
                Our mission is to provide practical, innovative solutions that address real-world challenges.
                We focus on delivering value, fostering growth, and empowering our customers with the tools they need to succeed.
            </p>
        </div>

        <div class="mission-image"> <!-- Mission image -->
            <img src="{{ asset('images/mission.png') }}" alt="Mission Team">
        </div>
    </div>
</section>