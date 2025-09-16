<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"> <!-- Set character encoding -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive design -->
    <title>{{$title}}</title> <!-- Dynamic page title -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- External CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"> <!-- Google Fonts -->
</head>

<body>
    <header>
        <div class="top-header"> <!-- Header wrapper -->

            <div class="logo-section"> <!-- Logo and company name -->
                <img src="images/logo.png" alt="Company Logo" class="logo"> <!-- Company logo -->
                <span class="company-name"><a href="{{URL::to('admin/login')}}">App Innovation 92</a></span> <!-- Company name text -->
            </div>

            <nav class="menu"> <!-- Navigation menu -->
                <ul>
                    <li><a href="{{URL::to('home')}}">Home</a></li> <!-- Home link -->
                    <li><a href="{{URL::to('project')}}">Projects</a></li> <!-- Projects link -->
                    <li><a href="{{URL::to('vision')}}">Vision</a></li> <!-- Vision link -->
                    <li><a href="{{ route('user.blogs.index') }}">Blogs</a></li> <!-- Blog link -->
                    <li><a href="{{URL::to('team')}}">Our Team</a></li> <!-- Team link -->
                    <li><a href="{{URL::to('contact')}}">Contact</a></li> <!-- Contact link -->
                </ul>
            </nav>
        </div>
    </header>
