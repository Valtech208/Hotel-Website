<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Chad X Luxuries</title>
  <link rel="stylesheet" href="contact.css">
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
            <a href="#contact" class="btn">Book Your Stay</a>
        </div>
    </div>

    <!-- DOTS -->
    <div class="dots">
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
</section>

<?php
// Load PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Make sure PHPMailer is installed via Composer

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data safely
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Set default subject since the form has no field
    $subject = 'No Subject';

    // --- Step 1: Save message to database ---
    $conn = new mysqli("localhost", "root", "", "hotel_db"); // your DB name
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    // --- Step 2: Send email to admin ---
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.example.com'; // Replace with your SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'your_email@example.com'; // Replace with your email
        $mail->Password   = 'your_email_password';   // Replace with your email password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('your_email@example.com', 'Hotel Admin'); // Sender
        $mail->addAddress('your_email@example.com'); // Admin email

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Message';
        $mail->Body    = "
            <strong>Name:</strong> $name<br>
            <strong>Email:</strong> $email<br>
            <strong>Message:</strong> $message
        ";

        $mail->send();
        $feedback = "Message sent successfully!";
    } catch (Exception $e) {
        $feedback = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>


<section class="contact-section" id="contact">
  <div class="contact-container">
    <div class="contact-info">
      <h2>Contact Us</h2>
      <p>We’d love to hear from you! Whether it’s a question about rooms, dining, or your next event, reach out and we’ll respond promptly.</p>
      <div class="contact-details">
        <div>
          <h4>Address</h4>
          <p>123 Luxury St, Cityville</p>
        </div>
        <div>
          <h4>Email</h4>
          <p>info@chadxluxuries.com</p>
        </div>
        <div>
          <h4>Phone</h4>
          <p>+234 916 277 4838</p>
        </div>
      </div>
      <div class="social-icons">
        <a href="#"><img src="facebook-icon.svg" alt="Facebook"></a>
        <a href="#"><img src="instagram-icon.svg" alt="Instagram"></a>
        <a href="#"><img src="twitter-icon.svg" alt="Twitter"></a>
      </div>
    </div>

    <div class="contact-form">
  <h2>Send a Message</h2>
  <form action="send-message.php" method="POST">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" placeholder="Your Message" rows="6" required></textarea>
    <button type="submit">Send Message</button>
  </form>
</div>

  </div>
</section>


<footer>
    <p>&copy; 2026 Chad X Luxuries. All rights reserved.</p>
</footer>

</body>
</html>
