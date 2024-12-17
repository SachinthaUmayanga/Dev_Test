<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Library</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Add this in the <head> section of your HTML -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Add this just before the closing </body> tag -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
/>
</head>

    <!-- Header -->
    <?php include 'includes/header.php';?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-image">
            <img src="assets/images/theater.jpg" alt="Movie Library">
        </div>
        <div class="hero-text">
            <h1>MOVIE LIBRARY</h1>
            <p>Discover, collect, and enjoy the finest movies of all time.</p>
        </div>
    </section>

    
    <!-- Movie Collection Section -->
    <section class="movie-collection">
        <h2>Collect your favourites</h2>
        <div class="search-bar">
            <input type="text" id="movie-search" placeholder="Search for movies...">
            <button><i class="fas fa-search"></i></button>
        </div>
        <div class="cards" id="cardContainer">
            <!-- Movie cards will be dynamically inserted here -->
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-us">
        <h2>How to reach us</h2>
        <div class="contact-container">
            <form>
                <label>Full Name*</label>
                <input type="text" placeholder="Enter your name" required>
                <label>Email*</label>
                <input type="email" placeholder="Enter your email" required>
                <label>Phone</label>
                <input type="tel" placeholder="Enter your phone number">
                <label>Comments*</label>
                <textarea placeholder="Enter your message"></textarea>
                <label><input type="checkbox" required> I agree to the Terms & Conditions</label>
                <button type="submit">Submit</button>
            </form>
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.3812075643614!2d79.9404323!3d6.844821199999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25069caa2f53b%3A0xe7eae3a8b1f1214d!2seBEYONDS%20eBusiness%20%26%20Digital%20Solutions!5e0!3m2!1sen!2slk!4v1734254562486!5m2!1sen!2slk" 
                width="600" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php';?>

    <!-- JS -->
    <script src="assets/js/scripts.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>