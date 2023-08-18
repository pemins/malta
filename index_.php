<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Africa House Homestay</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Add Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <!-- Include Google Fonts -->
    
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">




    <style>
        /* Reset some default styles */
        body,   ul, li {
           
            /* background-color: rgba(0, 0, 0, 0.5);  */
        }
        .navbar ul{
            padding-left:10px;
         
            padding-bottom:10px;
            padding-top:10px;
        }

        .navbar-nav .nav-link {
           
            font-family: 'Helvetica Neue', sans-serif;
            /* font-family: 'Bungee', cursive; */
             color: #fff;
          
             font-weight:bold;
        }

        .navbar-icon {
            font-size: 1.5rem;
            margin-right: 5px;
        }
        .navbar{
            background-image: url('img/banner.jpg');
            /* background-color: rgba(0, 0, 0, 0.7);   */
            background-size: cover;
            
        }
        .navbar-brand ,.caption h1,.caption  {
           
            /* font-family: 'Bungee', cursive; */
            /* font-family: 'Gochi Hand', cursive; */
            /* font-family: 'Fredericka the Great', cursive; */
            /* font-family: 'Amatic SC', cursive; */
            font-family: 'Rancho', cursive;
            font-weight:bold;
            font-size: 2.0rem;

        }
        
        .navbar-brand p{
         margin-top:0;
         font-size: small;
        }

        .caption p{
           font-family: 'Fredericka the Great', cursive;  
        }
        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }
        header {
            position: relative;
            color:#fff;
            text-align: center;
            background-image: url('img/banner.jpg');
            background-size: cover;
            background-position: center;
            background-color: rgba(0, 0, 0, 0.3); /* Add a slight background overlay */
            height: 100vh; /* Set header to full viewport height */
        }

        .caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 70%;
            background-color: rgba(0, 0, 0, 0.0);
            padding: 20px;
            border-radius: 10px;
            display: flex; /* Use flexbox */
            flex-direction: column;
            align-items: center; /* Center-align vertically */
        }
        .caption h1{
            padding-top: 80px;
            font-size: 7rem;
            
        }
        .caption p{
            padding-bottom: 80px;
        }

        .section h1 {
           
            padding-left: 20px;
            font-size: 3rem;
            margin-bottom: 20px;
        }

        header p {
            padding-left: 20px;
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        /* Section styling */
        section {
            padding: 80px 0;
            text-align: center;
        }

        section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .image-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }

        .image-container img {
            max-width: 300px;
            margin: 10px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        /* Form styling */
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 30px;
        }

        input, textarea {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        input[type="text"], input[type="email"], textarea {
            background-color: #f9f9f9;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Footer styling */
        footer {
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            text-align: center;
            padding: 15px 0;
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

        @media (max-width: 575.98px) {

        .caption{
            align-items: center; 
        }
        .caption h1{

            padding-top: 20px;
            padding-left: 80px;
            padding-right: 80px;
            font-size: 2.0rem;  
        }
        .caption p{
            font-size: 0.9rem; 
            padding-bottom: 20px;
            align-items: center; 
        }
        .navbar ul{
           background-color: rgba(0, 0, 0, 0.7);
        }
        .navbar-nav li:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }

        }
    </style>
</head>
<body>
    <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <!-- <i class="fas fa-globe-africa navbar-icon"></i> -->
            Africa House
            <p>Your cozy retreat in the heart of Malta</p>
        </a>
            
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#rooms">Services</a>
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

    <!-- Header -->
    <header id="home">
        <div class="caption">
            <!-- <h1>Africa House  </h1>
            <p>Your cozy retreat in the heart of Malta</p> -->
        </div>
    </header>

    <!-- About Us Section -->
    <section id="about">
        <h2>Discover Our Retreat</h2>
        <p>Discover the unique experience of our homestay. We offer a cozy retreat in the heart of Malta, where you can enjoy the local hospitality.</p>
    </section>

    <!-- Gallery Section -->
    <section id="gallery">
        <h2>Showcase</h2>
        <div class="image-container">
            <img src="img/6.jpg" alt="Image 1">
            <img src="img/7.jpg" alt="Image 2">
            <img src="img/9.jpg" alt="Image 3">
            <!-- Add more images here -->
        </div>
    </section>

    <!-- Contact Us Section -->
    <section id="contact">
        <h2>Contact Us</h2>
        <div class="container">
        <form>
            <input type="text" placeholder="Your Name">
            <input type="email" placeholder="Your Email">
            <textarea placeholder="Your Message"></textarea>
            <button type="submit">Send Message</button>
        </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class=" ">
        <div class="container">
            <span>236, TRIO IZ-ZEWG MINI L - ISLA MALTA</span>
            <span>Email: info@africahouse.com</span>
            <span>Phone: +356 9947 2903</span>
        </div>
    </footer>
    <!-- Scroll up button -->
    <button id="scrollUpButton" onclick="scrollToTop()">
        <i class="fas fa-arrow-up"></i>
    </button>
    <!-- Include Bootstrap and Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        
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
        
    </script>
</body>
</html>
