@include('layouts.header', ['title' => 'Home Page']) <!-- Include header layout with dynamic title -->

<link rel="stylesheet" href="{{ asset('css/home.css') }}"> <!-- Home page specific CSS -->

<main>
    <!-- Portfolio Section -->
    <section class="portfolio">
        <div class="container">
            <p class="tagline">Innovation at the<br>Heart of Progress</p> <!-- Tagline -->
            <h1 class="title">PORTFOLIO</h1> <!-- Portfolio title -->
            <p class="email">app92innovation@gmail.com</p> <!-- Contact email -->
        </div>
        <div class="portfolio-img"> <!-- Portfolio image -->
             <img src="{{ asset('images/inspire.png') }}" alt="Logo">
        </div>
    </section>

    <!-- Service Section -->
    <section class="services">
        <div class="container">
            <div class="services-left"> <!-- Service section description -->
                <h2 class="heading">OUR SERVICE</h2>
                <p class="description">
                    Our services are designed to meet diverse needs with innovation and efficiency. 
                    From tailored solutions to expert support, we provide comprehensive offerings 
                    that empower businesses and individuals to achieve their goals seamlessly.
                </p>
            </div>

            <div class="services-right"> <!-- List of services -->
                <ul>
                    <li>
                        <h3>Website Development</h3>
                        <p>
                            We specialize in creating dynamic, user-friendly websites tailored to your needs. 
                            Our website development services combine innovative design with cutting-edge technology 
                            to deliver impactful online experiences that drive growth and engagement.
                        </p>
                    </li>
                    <li>
                        <h3>Mobile App Development</h3>
                        <p>
                            Our mobile app development services focus on creating intuitive, high-performance apps 
                            for both iOS and Android. We build custom solutions that enhance user experiences, 
                            boost engagement, and help businesses stay ahead in a mobile-first world.
                        </p>
                    </li>
                    <li>
                        <h3>UI/UX Designing</h3>
                        <p>
                            Our UI/UX design services focus on creating seamless, intuitive experiences that engage 
                            users and drive satisfaction. We blend creativity with functionality to design interfaces 
                            that are not only visually appealing but also easy to navigate and use.
                        </p>
                    </li>
                    <li>
                        <h3>Quality Analyst</h3>
                        <p>
                           Our Quality Analysis services are dedicated to ensuring that your products are reliable, 
                           efficient, and meet all necessary standards. Through thorough testing and continuous improvements,
                           we help you deliver high-quality software that exceeds customer expectations.
                        </p>
                    </li>
                    <li>
                        <h3>Socail Media (Post/Banner)</h3>
                        <p>
                           Our Social Media Post and Banner design services are aimed at creating visually striking and engaging 
                           content that resonates with your audience. We craft tailored designs that reflect your brand’s identity, drive
                           engagement, and boost your online presence.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="about-us">
        <div class="container">
            <div class="about-left"> <!-- About us text -->
                <h1 class="heading">ABOUT US</h1>
                <p class="description">
                    We are a forward-thinking company committed to innovation and
                    excellence. Our mission is to deliver impactful solutions that 
                    drive growth and success.
                </p>
                 <p class="email"> app92innovation@gmail.com</p>
            </div>

            <div class="about-right"> <!-- About us image -->
                 <img src="{{ asset('images/about.png') }}" alt="Logo">
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
            <select name="service" class="form-input" required>
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
</main>