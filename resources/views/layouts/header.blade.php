<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Set character encoding -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive design -->
    <title>{{ $title }}</title> <!-- Dynamic page title -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- External CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"> <!-- Google Fonts -->
</head>

<body>
    <header>
        <div class="top-header"> <!-- Header wrapper -->

            <!-- Logo and Company Name -->
            <div class="logo-section">
                <img src="{{ asset('images/logo.png') }}" alt="Company Logo" class="logo">
                <span class="company-name">
                    <a href="{{ URL::to('home') }}">App Innovation 92</a>
                </span>
            </div>

           <!-- Mobile hamburger -->
  <button id="menuToggle" class="menu-toggle" aria-label="Toggle menu" aria-expanded="false">
    &#9776;
  </button>

            <!-- Navigation Menu -->
            <nav class="menu" id="menu">
                <ul>
                    <li><a href="{{ URL::to('home') }}">Home</a></li>
                    <li><a href="{{ URL::to('project') }}">Projects</a></li>
                    <li><a href="{{ URL::to('vision') }}">Vision</a></li>
                    <li><a href="{{ route('user.blogs.index') }}">Blogs</a></li>
                    <li><a href="{{ URL::to('team') }}">Our Team</a></li>
                    <li><a href="{{ URL::to('contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- JS for menu toggle -->
 <script>
/* Place this at the end of body (or in a JS file included after DOM) */
document.addEventListener('DOMContentLoaded', function () {
  const menuToggle = document.getElementById('menuToggle');
  const menu = document.getElementById('menu');

  if (!menuToggle || !menu) {
    console.warn('Menu toggle or menu element not found. IDs must match: #menuToggle and #menu');
    return;
  }

  // Toggle open/close
  menuToggle.addEventListener('click', function (e) {
    e.stopPropagation();
    const isOpen = menu.classList.toggle('active');
    menuToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    menu.setAttribute('aria-hidden', isOpen ? 'false' : 'true');
  });

  // Close when clicking outside
  document.addEventListener('click', function (e) {
    if (!menu.contains(e.target) && !menuToggle.contains(e.target)) {
      if (menu.classList.contains('active')) {
        menu.classList.remove('active');
        menuToggle.setAttribute('aria-expanded', 'false');
        menu.setAttribute('aria-hidden', 'true');
      }
    }
  });

  // Close when clicking any menu link (optional)
  menu.addEventListener('click', function (e) {
    const target = e.target;
    if (target.tagName === 'A') {
      menu.classList.remove('active');
      menuToggle.setAttribute('aria-expanded', 'false');
      menu.setAttribute('aria-hidden', 'true');
    }
  });

  // If the device rotates / resizes, ensure menu is reset on larger screens
  window.addEventListener('resize', function () {
    if (window.innerWidth > 768) {
      menu.classList.remove('active');
      menuToggle.setAttribute('aria-expanded', 'false');
      menu.setAttribute('aria-hidden', 'true');
    }
  });
});
</script>

</body>
</html>
