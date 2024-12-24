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
        <div class="header-row">
            <h2>Collect your favourites</h2>
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" id="movie-search" placeholder="Search title and add to grid">
            </div>
        </div>
        <hr />
        <div class="cards" id="cardContainer">
            <!-- Movie cards will be dynamically inserted here -->
        </div>
    </section>


    <!-- Contact Form Section -->
<section class="contact-us">
    <div class="container">
        <!-- Heading -->
        <div class="container-heading">
            <h2>How to reach us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur.</p>
        </div>

        <div class="content">
            <!-- Left: Contact Form -->
            <div class="form-section">
                <form method="POST" action="backend/backend.php">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first-name">First Name *</label>
                            <input type="text" id="first-name" required>
                        </div>
                        <div class="form-group">
                            <label for="last-name">Last Name *</label>
                            <input type="text" id="last-name" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Telephone</label>
                        <input type="tel" id="phone">
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message"></textarea>
                    </div>

                    <small>*required fields</small>
                    <div class="checkbox-group">
                        <input type="checkbox" id="terms" required>
                        <label for="terms">I agree to the <a href="#">Terms & Conditions</a></label>
                    </div>
                    <button type="submit">SUBMIT</button>
                </form>
            </div>

            <!-- Right: Embedded Map -->
            <div class="map-section">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.3812075643614!2d79.9404323!3d6.844821199999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25069caa2f53b%3A0xe7eae3a8b1f1214d!2seBEYONDS%20eBusiness%20%26%20Digital%20Solutions!5e0!3m2!1sen!2slk!4v1734924803323!5m2!1sen!2slk"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </div>
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