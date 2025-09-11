@include('layouts.header', ['title' => 'Our Team']) <!-- Include header layout with dynamic title -->

<link rel="stylesheet" href="{{ asset('css/team.css') }}"> <!-- Team page specific CSS -->

<section class="team-section">
    <div class="team-container"> <!-- Main team section container -->
        <div class="team-left"> <!-- Left side with heading and description -->
            <h1 class="team-heading">OUR <br> TEAM</h1> <!-- Section heading -->
            <p class="team-text">
                Our team is a diverse group of passionate professionals dedicated to innovation and excellence. 
                With expertise across various fields, we work collaboratively to deliver impactful solutions, 
                ensuring the highest standards of quality and customer satisfaction.
            </p>
        </div>

        <div class="team-right"> <!-- Right side with team member list -->
            <div class="team-member"><strong>SARABJEET SINGH</strong><br>Founder / Project Manager</div>
            <div class="team-member"><strong>AMANDEEP</strong><br>Mobile App Developer</div>
            <div class="team-member"><strong>SIMRAT KAUR</strong><br>UI/UX Designer</div>
            <div class="team-member"><strong>GURPREET SINGH</strong><br>Mobile App Developer</div>
            <div class="team-member"><strong>HARPREET KAUR</strong><br>Backend Developer</div>
            <div class="team-member"><strong>JASHANPREET SINGH</strong><br>Backend Developer</div>
            <div class="team-member"><strong>SARBJEET KAUR</strong><br>Quality Analyst</div>
            <div class="team-member"><strong>AMANDEEP KAUR</strong><br>Front End Developer</div>
        </div>
    </div>
</section>

<!-- Inspiration Section -->
<section class="inspiration-section">
        <div class="inspiration-text"> <!-- Left side with inspirational text -->
            <h1>
                STAY <br>
                INSPIRED. <br>
                NEVER <br>
                STOP <br>
                CREATING.
            </h1>
            <p class="inspiration-email">app92innovation@gmail.com</p> <!-- Contact email -->
        </div>

        <div class="inspiration-image"> <!-- Right side with image -->
            <img src="{{ asset('images/inspire.png') }}" alt="Team Meeting">
        </div>
</section>