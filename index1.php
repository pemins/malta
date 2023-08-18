<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Africa House Homestay</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <!-- Include selected Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <!-- Add Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    <style>
        /* Global styles */
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
        }
        .section .container {
            max-width: 1200px; /* Set the maximum width */
            padding: 20px; /* Add padding for spacing */
            margin: 0 auto; /* Center the container horizontally */
            background-color: #f9f9f9; /* Add a light background color */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
            border-radius: 10px; /* Add border radius for rounded corners */
        }

        /* Navbar icon styles */
        .navbar-icon {
            font-size: 1.5rem;
            margin-right: 5px;
        }
        /* Fullscreen overlay carousel */
        .overlay-carousel {
            position: relative;
            height: 100vh; /* Full viewport height */
            background-image: url('img/overlay-carousel1.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
        
        }
        .overlay-carousel h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

         /* Carousel caption styles */
         .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 70%;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
        }
        .carousel-caption h3 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }
        .carousel-caption p {
            font-size: 1.2rem;
            margin-bottom: 15px;
        }
        .carousel-caption .btn {
            font-size: 1.1rem;
        }
        
        /* Navigation */
        .navbar {
            background-color: rgba(0, 0, 0, 0.7);
        }
        .navbar-brand {
            font-size: 1.5rem;
            color: #fff;
        }
        .master-container{

            padding: 300px 0;
        }
        /* Section styles */
        .section {
            padding: 90px 0;
            text-align: center;
        }
        .section h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
        }
        .section p {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 50px;
        }
       
        .section-heading h2{
        font-family: 'Arial', sans-serif;
        font-size: 2.5rem; 
        color: #ff5722;"
        }
        .section img{
            border-radius:20px;
        }

        #gallery {
            display: flex;
            justify-content: center; /* Center the content horizontally */
            align-items: center; /* Center the content vertically */
            max-width: 80%; /* Limit the width of the gallery to 80% of the container */
            margin: 0 auto; /* Center the gallery horizontally by setting margin left and right to auto */
            padding: 70px 0; /* Add some padding to the top and bottom */
        }

        #gallery img {
            border-radius: 10px; /* Apply a border radius of 10px to images within #gallery */
            max-width: 100%; /* Make sure images within the gallery don't exceed their container */
            height: auto; /* Maintain the aspect ratio */
        }

        /* Scroll up button styles */
        #scrollUpButton {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 9999;
            width: 50px;
            height: 50px;
            font-size: 1.5rem;
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 50%;
            transition: background-color 0.3s, transform 0.3s;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #scrollUpButton:hover {
            background-color: #0056b3;
            transform: scale(1.1);
        }

        /* Contact Form Styles */
        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        #contactForm {
            max-width: 500px;
            margin: 0 auto;
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }


        /* Footer styles */
        #footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }
        #footer span {
            display: block;
            margin: 10px 0;
        }

    /* Custom CSS for small screens */
    @media (max-width: 575.98px) {
     
        .overlay-carousel .carousel-inner {
            /* Force the carousel-inner to be full viewport height */
            min-height: 100vh;
        }
        .overlay-carousel .carousel-caption h3 {
            font-size: 0.9rem; /* Adjust the font size for small screens */
        }
      
        .overlay-carousel .carousel-caption p {
            font-size: 0.7rem; /* Adjust the font size for small screens */
        }

        .carousel-caption{
        max-width: 70%;
        }

        #scrollUpButton {
        justify-content: center;
        align-items: center;
        }
      
    }

    </style>
</head>
<body>
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><i class="fas fa-globe-africa navbar-icon"></i>Africa House</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#imageCarousel"><i class="fa fa-home fa-xs"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Discover Our Retreat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#rooms">Our Cozy Accommodations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery">Showcase</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Overlay Carousel (First Section) -->
<div class="overlay-carousel">
    <div id="imageCarousel" class="carousel slide" data-bs-ride=""> <!-- data-bs-ride="carousel">-->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/banner.jpg" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption">
                        <h3> Africa House Homestay</h3>
                        <p>Your cozy retreat in the heart of Malta</p>
                    </div>
            </div>
            <div class="carousel-item">
                <img src="img/2.jpg" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="img/3.jpg" class="d-block w-100" alt="Slide 3">
            </div>
            <!-- Add more images here -->
        </div>
        <!-- <a class="carousel-control-prev" href="#imageCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#imageCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a> -->
    </div>
 
</div>
<div class="master-container">
<!-- About Section -->
<div id="about" class="section">
    <div class="container">
        <h2 class="section-heading">Discover Our Retreat</h2>
        <div class="row">
            <div class="col-md-6">
                <img src="img/9.jpg" alt="About Us Image" class="img-fluid about-image">
            </div>
            <div class="col-md-6">
                <p class="description">
                    Experience the beauty and culture of Malta in our homestay. Relax and enjoy the authentic charm of local hospitality.
                </p>
            </div>
        </div>
    </div>
</div>


<!-- Rooms Section -->
<div id="rooms" class="section">
    <div class="container">
        <h2>Our Cozy Accommodations</h2>
        <p> Wake up to stunning views of the Maltese landscape.</p>
    </div>
</div>

<!-- Gallery Section -->
<div id="gallery" class="section">
    <div class="container">
        <h2> Showcase</h2>
        <div id="imageCarouselGallery" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/4.jpg" class="d-block w-100" alt="Gallery 1">
                </div>
                <div class="carousel-item">
                    <img src="img/5.jpg" class="d-block w-100" alt="Gallery 2">
                </div>
                <div class="carousel-item">
                    <img src="img/6.jpg" class="d-block w-100" alt="Gallery 3">
                </div>
                <!-- Add more images here -->
            </div>
            <a class="carousel-control-prev" href="#imageCarouselGallery" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#imageCarouselGallery" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div id="contact" class="section">
    <div class="container">
        <h2>Contact Us</h2>
        <p>Ready for an unforgettable experience? Contact us to book your stay at Africa House Homestay.</p>
        <form id="contactForm" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

</div>
<!-- Footer -->
<div id="footer">
    <div class="container">
        
        <span>236, TRIO IZ-ZEWG MINI L - ISLA MALTA</span>
        <span>Email: info@africahouse.com</span>
        <span>Phone: +356 9947 2903</span>
    </div>
</div>

<button id="scrollUpButton" onclick="scrollToTop()">
        <i class="fas fa-arrow-up"></i>
    </button>
<!-- Include Bootstrap and jQuery JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- JavaScript to prevent scrolling on page load -->
<script>
    // Disable scrolling to the anchor in the URL
    window.onload = function() {
        if (location.hash) {
            setTimeout(function() {
                window.scrollTo(0, 0);
            }, 1);
        }
    };
    // Show or hide the scroll-up button based on scroll position
    window.onscroll = function() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("scrollUpButton").style.display = "block";
        } else {
            document.getElementById("scrollUpButton").style.display = "none";
        }
    };

    // Scroll to the top of the page smoothly
    function scrollToTop() {
        // Scroll to the top with smooth behavior
        if ('scrollBehavior' in document.documentElement.style) {
            document.documentElement.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        } else {
            // For browsers that do not support scroll behavior, simply jump to the top
            document.documentElement.scrollTop = 0;
        }
    }

     // Function to close the Bootstrap Navbar menu
     function closeNavbarMenu() {
        var navToggler = document.querySelector('.navbar-toggler');
        var navbarMenu = document.querySelector('.navbar-collapse');

        if (navToggler && navbarMenu) {
            // Check if the menu is open
            if (navbarMenu.classList.contains('show')) {
                // Hide the menu by triggering the click event on the toggler
                navToggler.click();
            }
        }
    }

    // Attach the closeNavbarMenu function to the click event of each Navbar link
    var navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    if (navLinks) {
        navLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                closeNavbarMenu();
            });
        });
    }
</script>
</body>
</html>
