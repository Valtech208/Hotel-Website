<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chad X Luxury Hotel</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
<header class="header">
  <div class="container">
        <nav>
            <h2 class="logo">Chad <span>X</span> Luxuries</h2>

            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="rooms.php">Rooms</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="booking.php">Book Now</a></li>
            </ul>
        </nav>
    </div>
</header>

<section class="hero">
    <!-- HERO IMAGES -->
    <!-- <img src="images/hotel-image1.jpg" class="hero-img active" alt="Hotel View">
    <img src="images/hotel-image3.jpg" class="hero-img" alt="Luxury Room">
    <img src="images/hotel-image4.jpg" class="hero-img" alt="Reception Desk"> -->

    <div class="container-hero">
        <div class="hero-content">
            <h1>Luxury & Comfort</h1> <br>
            <p>Experience world-class hospitality at Chad X Luxuries</p> <br>
            <a href="booking.html" class="btn">Book Now</a>
        </div>
    </div>

    <!-- DOTS -->
    <div class="dots">
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
</section>
<!-- About us starts here -->
<section class="about-us">
        <div class="section-title1">
            <h2>Chad X luxury Hotel</h2>
        </div>
        <div class="section-title">
        <p>
           At Chad X Luxury Hotel, we don’t just offer rooms we offer an experience. <br>
           An experience built on comfort, elegance, and attention to detail. <br>

           From the moment guests arrive, they feel cared for, relaxed, and valued. <br>
           Every space is designed to calm the mind, every service delivered with purpose. <br>

           We believe luxury is not about excess it’s about how effortlessly good a guest feels. <br>
           That’s why travelers choose Chad X Luxury Hotel: not just to stay, but to return. <br>

           Chad X Luxury Hotel where comfort becomes a standard, and every visit feels like an upgrade. <br>

        </p>
        <div class="section-img">
            <img src="./images/hotel-bar.jpg" alt="">
        </div>
        <div class="section-img2">
            <img src="./images/hotel-room.jpg" alt="">
        </div>
    </div>
</section>

<section>
    <div class="container-room">
        <div class="section-title-room">
            <h4>CHAD X LUXURY HOTEL</h2> 
            <h1>Rooms & Suites</h1>
        </div>

        <div class="rooms">
            <div class="room" id="">
                <img src="images/standard-room.jpg" alt="Standard Room">
                <div class="room-content">
                    <h2>Standard Room</h2>
                    <p>Affordable comfort with modern amenities.</p>
                    <a href="booking.php">Book</a>
                    <a href="rooms.php" onclick="showDetails('Standard Room')">Details</a>
                </div>
            </div>

            <div class="room">
                <img src="images/deluxe-room.jpg" alt="Deluxe Room">
                <div class="room-content">
                    <h2>Deluxe Balcony</h2>
                    <p>Extra space, premium comfort, elegant design.</p>
                    <a href="booking.php">Book</a>
                    <a href="rooms.php" onclick="showDetails('Deluxe Balcony')">Details</a>
                </div>
            </div>

            <div class="room">
                <img src="images/executive-suite.jpg" alt="Suite">
                <div class="room-content">
                    <h2>Executive Suites</h3>
                    <p>Luxury living with top-class services.</p>
                    <a href="booking.php">Book</a>
                    <a href="rooms.php" onclick="showDetails('Executive Suites')">Details</a>
                </div>
            </div>
             <div class="room">
                <img src="images/premium room.jpg" alt="Deluxe Room">
                <div class="room-content">
                    <h2>Premium Suite</h2>
                    <p>Extra space, premium comfort, elegant design.</p>
                    <a href="booking.php">Book</a>
                    <a href="rooms.php" onclick="showDetails('Premium Suite')">Details</a>
                </div>
            </div>

            <div class="room">
                <img src="images/VIP executive room.jpg" alt="Suite">
                <div class="room-content">
                    <h2>VIP Executive Suites</h3>
                    <p>Luxury living with top-class services.</p>
                    <a href="booking.php">Book</a>
                    <a href="rooms.php" onclick="showDetails('VIP executive room')">Details</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="facilities">
  <h2 class="section-title3">Hotel Facilities</h2>

  <div class="facilities-grid">

    <div class="facility-card">
      <div class="icon">✈️</div>
      <h3>Airport Pick-Up & Drop</h3>
      <p>Enjoy seamless airport transfers with our reliable chauffeur service, ensuring a stress-free arrival and departure.</p>
    </div>

    <div class="facility-card">
      <div class="icon">🚗</div>
      <h3>Secure Parking Space</h3>
      <p>Complimentary, monitored parking facilities are available for all guests, providing safety and convenience.</p>
    </div>

    <div class="facility-card">
      <div class="icon">🛎️</div>
      <h3>24/7 Room Service</h3>
      <p>Indulge in gourmet meals and refreshments delivered directly to your room anytime, day or night.</p>
    </div>

    <div class="facility-card">
      <div class="icon">🏊</div>
      <h3>Infinity Swimming Pool</h3>
      <p>Relax and unwind in our luxurious outdoor pool designed for comfort, elegance, and breathtaking views.</p>
    </div>

    <div class="facility-card">
      <div class="icon">📶</div>
      <h3>High-Speed Fibre Internet</h3>
      <p>Stay connected with ultra-fast Wi-Fi available throughout the property for both business and leisure.</p>
    </div>

    <div class="facility-card">
      <div class="icon">🍳</div>
      <h3>Complimentary Breakfast</h3>
      <p>Start your morning with a curated selection of local and international cuisine prepared by top chefs.</p>
    </div>

  </div>
</section>

<section class="testimonials">

    <div class="overlay"></div>

    <div class="testimonial-container">

        <p class="small-title">TESTIMONIALS</p>
        <h2>What Guests Say?</h2>

        <div class="slider">

            <!-- Slide 1 -->
            <div class="slide active">
                <p class="review">
                    "An unforgettable experience. The service was flawless and the atmosphere felt truly five-star."
                </p>

                <div class="stars">★★★★★</div>

                <h3>Chuks</h3>
                <span>Guest</span>
            </div>

            <!-- Slide 2 -->
            <div class="slide">
                <p class="review">
                    "Everything from the rooms to the dining exceeded expectations. I will definitely return."
                </p>

                <div class="stars">★★★★★</div>

                <h3>Chad</h3>
                <span>Guest</span>
            </div>

            <!-- Slide 3 -->
            <div class="slide">
                <p class="review">
                    "Beautiful environment, calm energy, and top-tier hospitality. Highly recommended."
                </p>

                <div class="stars">★★★★★</div>

                <h3>Val</h3>
                <span>Guest</span>
            </div>

            <!-- Slide 4 -->
            <div class="slide">
                <p class="review">
                    "Luxury at its finest. The staff made every moment comfortable and memorable."
                </p>

                <div class="stars">★★★★★</div>

                <h3>Uche</h3>
                <span>Guest</span>
            </div>

        </div>

    </div>

</section>





<footer class="footer">
  <div class="footer-content">
    <div class="footer-logo">
      <h2>Chad X Luxuries</h2>
      <p>Where luxury meets comfort in every stay.</p>
    </div>
    <div class="footer-sections">
      <div class="footer-section">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="rooms.html">Rooms & Suites</a></li>
          <li><a href="#">Dining</a></li>
          <li><a href="#">Spa & Wellness</a></li>
          <li><a href="#">Events</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h4>Contact Us</h4>
        <p>123 Luxury St, Cityville</p>
        <p>Email: chadxluxury@gmail.com</p>
        <p>Phone: +234 916 277 4838</p>
      </div>
      <div class="footer-section">
        <h4>Follow Us</h4>
        <div class="social-icons">
          <a href="#"><img src="facebook-icon.svg" alt="Facebook"></a>
          <a href="#"><img src="instagram-icon.svg" alt="Instagram"></a>
          <a href="#"><img src="twitter-icon.svg" alt="Twitter"></a>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2026 Chad X Luxuries. All rights reserved.</p>
  </div>
</footer>


<!-- chukzs` --><!-- JAVASCRIPT FILE -->
<script src="main.js"></script>
<!-- for the slider reviews starts here -->
<script>

let slides = document.querySelectorAll(".slide");
let index = 0;

function showSlides(){
    slides.forEach(slide => slide.classList.remove("active"));

    index++;
    if(index > slides.length){
        index = 1;
    }

    slides[index-1].classList.add("active");

    setTimeout(showSlides, 4000); // changes every 4 seconds
}

showSlides();

</script>
<!-- for the slider-reviews end here -->

</body>
</html>