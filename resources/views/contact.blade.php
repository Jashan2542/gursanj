@include('layouts.header', ['title' => 'contact Page']) <!-- Include header layout with dynamic title -->

<link rel="stylesheet" href="{{ asset('css/contact.css') }}"> <!-- Contact page specific CSS -->

<section>
  <div class="container"> <!-- Main container -->
        <div class="left"> <!-- Left section with text -->
            <h1>LET'S<br>CONNECT<br>WITH US!</h1> <!-- Heading -->

            <!-- Clickable phone -->
            <p class="contact">
                <a href="tel:+919041780559">+91 90417-80559</a> <!-- Telephone link -->
            </p>

            <!-- Clickable email -->
            <p class="contact">
                <a href="mailto:app92innovation@gmail.com">app92innovation@gmail.com</a> <!-- Email link -->
            </p>
        </div>

        <div class="right"> <!-- Right section with image -->
            <div class="img">
                <img src="{{ asset('images/inspire.png') }}" alt="Mission Team"> <!-- Image -->
            </div>
        </div>
    </div>
</section>