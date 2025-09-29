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


<div class="contact-container">
    <h2 class="contact-title">Contact Us</h2>

    @if(session('success'))
        <div class="alert-success-box">{{ session('success') }}</div>
    @endif

    <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
        @csrf

        <div class="form-group">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-input" required>
        </div>

        <div class="form-group">
            <label class="form-label">Select Service</label>
            <select name="service" class="form-input-service" required>
                <option value="">-- Select Service --</option>
                <option value="Web Development">Web Development</option>
                <option value="Mobile App">Mobile App</option>
                <option value="UI/UX Designing">UI/UX Designing</option>
                <option value="Quality Analyst">Quality Analyst</option>
                <option value="Socail Media (Post/Banner)">Socail Media (Post/Banner)</option>
                <option value="Others">Others</option>
            </select>
        </div>

        <div class="form-group">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-input" required>
        </div>

        <div class="form-group">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" class="form-input" required>
        </div>

        <div class="form-group">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-input" required>
        </div>

        <div class="form-group">
            <label class="form-label">Description</label>
            <textarea name="description" rows="4" class="form-input" required></textarea>
        </div>

        <button type="submit" class="btn-submit">Send Message</button>
    </form>
</div>
