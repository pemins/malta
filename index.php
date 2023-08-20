<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Africa House</title>
    <!-- Include Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Add Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    <!-- Include Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Fredericka+the+Great&family=Gochi+Hand&family=Rancho&display=swap" rel="stylesheet">

    <style>
        /* Custom CSS for Africa House */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Typography styles */
        h1, h2, h3, h4, h5 {
            font-family: 'Amatic SC', cursive;
            font-weight: bold;
            margin-bottom: 10px;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        /* Background and box shadow */
        .section {
            background-color: #fff;
            padding: 50px 0;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Color palette */
        .primary {
            color: #007bff;
        }

        .accent {
            color: #ff6b6b;
        }

        /* Animations and transitions */
        .hover-fade {
            transition: opacity 0.3s;
        }

        .hover-fade:hover {
            opacity: 0.8;
        }

        .navbar.bg-scroll {
            background-color: rgba(0, 0, 0, 0.5); /* Set the background color when scrolled */
        }
        .navbar-brand {
            font-family: 'Rancho', cursive;
            color: #fff;
            font-size: 32px;
            font-weight: bold;
        }
        .navbar-nav .nav-link {
            color: #fff;
            font-size: 18px;
            margin-right: 20px;
            transition: opacity 0.3s;
        }
        .navbar-nav .nav-link:hover {
            opacity: 0.8;
        }
        .header-carousel-item {
            text-align: center;
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.4);
            font-family: 'Amatic SC', cursive;
            padding: 20px;
            border-radius: 10px;
        }
        .header-carousel-caption h2 {
            font-size: 48px;
            color: #fff;
            margin-bottom: 10px;
        }
        .header-carousel-caption p {
            font-size: 24px;
            color: #ddd;
            margin: 0;
        }
        .fade-in {
            opacity: 0;
            animation: fadeInAnimation ease 3s;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
        }
        @keyframes fadeInAnimation {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        .services {
            background-color: #f8f9fa;
            padding: 100px 0;
        }
        .services h3 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #007bff;
        }
        .services p {
            font-size: 20px;
            margin-bottom: 40px;
        }

        .accommodation,.services , .publicareas{
            padding-top: 80px;
        }
        /* Add custom styles for image containers */
        .image-container {
            overflow: hidden;
            height: 200px; /* Set the desired height for the image container */
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .footer {
           background-image: url('img/web.png'); 
           color: #fff;
           padding: 20px 0;
           text-align: center;
       }
       .footer p {
        margin: 0;
        font-size: 18px;
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

        .carousel-caption{
            align-items: center; 
            background-color: rgba(0, 0, 0, 0.1);
        }

        .carousel-caption h1{
            padding-left: 10px;
            padding-right: 10px;
            font-size: 1.4rem;  
        }
        .carousel-caption p{
            font-size: 1.2rem; 
            padding-bottom: 40px;
            align-items: center; 
        }
        .navbar ul{
            padding-left:10px;
            background-color: rgba(0, 0, 0, 0.5);

        }
        .navbar-nav li:hover {
         background-color: rgba(0, 0, 0, 0.5);
     }

 }
/*Accommodation*/
.accommodation-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 80px;
}

.slider-container {
    position: relative;
    overflow: hidden;
    border: 2px solid #ccc;
    border-radius: 10px;
}

.slider-container .slider {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.slider-container .slide {
    min-width: 100%;
    height: 400px;
    overflow: hidden;
}

.slider-container .slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.accommodation-details {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.accommodation-column {
    width: 48%;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}

.accommodation-column h2 {
    margin-top: 0;
}

@media screen and (max-width: 768px) {
 .accommodation-details {
  flex-direction: column;
}

.accommodation-column {
  width: 100%;
  margin-top: 20px;
}
}
/*end accommodation*/
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg   fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Africa House</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#accommodation">Accommodation</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel Section -->
    <div id="home" class="header-carousel slide" data-bs-ride="carousel">
        <div class="header-carousel-inner">
            <div class="header-carousel-item active" style="background-image: url('img/banner.jpg');">
                <div class="carousel-caption fade-in">
                    <h1>Welcome to Africa House </h1>
                    <p>Your cozy retreat in the heart of Malta</p>
                </div>
            </div>
            <!-- Add more carousel items here -->
        </div>
    </div>

    <div id="accommodation" class="accommodation-container ">
        <h3>Accomodation</h3>
        <div class="slider-container">
          <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/2.jpg" alt="Accommodation 1" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="img/3.jpg" alt="Accommodation 2" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="img/5.jpg" alt="Accommodation 3" class="d-block w-100">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
  </div>
</div>
</div>

<!-- Services Section -->
<div class="services" id="services">
    <div class="container">
        <h3>Services</h3>
        <div class="row">
            <div class="col-md-4">
                <h4>Comfy Rooms</h4>
                <p>Relax in our cozy and well-furnished rooms.</p>
            </div>
            <div class="col-md-4">
                <h4>Authentic Cuisine</h4>
                <p>Savor the flavors of delicious local dishes.</p>
            </div>
            <div class="col-md-4">
                <h4>Spa & Wellness</h4>
                <p>Pamper yourself with our rejuvenating spa and wellness services.</p>
            </div>
        </div>
    </div>
</div>

<!-- Public Areas Section -->
<div class="public-areas" id="public-areas">
    <div class="container">
        <h3>Public Areas</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="img/p1.jpg" class="card-img-top" alt="Pool Area">
                    <div class="card-body">
                        <h4 class="card-title">Pool Area</h4>
                        <p class="card-text">Take a refreshing dip in our stunning pool.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="img/p2.jpg" class="card-img-top" alt="Restaurant">
                    <div class="card-body">
                        <h4 class="card-title">Restaurant</h4>
                        <p class="card-text">Enjoy exquisite meals in our elegant restaurant.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="img/p3.jpg" class="card-img-top" alt="Garden">
                    <div class="card-body">
                        <h4 class="card-title">Garden</h4>
                        <p class="card-text">Relax and unwind in our lush and serene garden.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Footer Section -->
<footer class="footer">
    <div class="container">
        <p>&copy; 2023 Africa House</p>
    </div>
</footer>
<!-- Scroll up button -->
<button id="scrollUpButton" onclick="scrollToTop()">
    <i class="fas fa-arrow-up"></i>
</button>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
// JavaScript to add a class to the navbar when scrolled
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 0) {
        navbar.classList.add('bg-scroll');
    } else {
        navbar.classList.remove('bg-scroll');
    }
});
//accommodation slides
// const slider = document.querySelector(".slider");
// const slides = document.querySelectorAll(".slide");
// let currentIndex = 0;

// function nextSlide() {
//   currentIndex = (currentIndex + 1) % slides.length;
//   updateSlider();
// }

// function updateSlider() {
//   slider.style.transform = `translateX(-${currentIndex * 100}%)`;
// }

//     setInterval(nextSlide, 5000); // Change slide every 5 seconds
</script>

</body>
</html>
