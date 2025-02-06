
<?php include("../includes/header.php"); ?>

<link rel="stylesheet" type="text/css" href="../assets/css/contact.css">

<div class="contact-container">
        <h2>Contact My</h2>

        <!-- Success or error message display -->
        <?php
        if (isset($_GET['status'])) {
            if ($_GET['status'] == 'success') {
                echo "<p class='success-message'>Message sent successfully!</p>";
            } elseif ($_GET['status'] == 'error') {
                echo "<p class='error-message'>Failed to send message. Please try again.</p>";
            }
        }
        ?>

        <!-- Contact Form -->
        <form method="post" action="submit_contact.php">
            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>

            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label for="message">Your Message:</label>
                <textarea id="message" name="message" placeholder="Enter your message" rows="5" required></textarea>
            </div>

            <button type="submit" class="submit-btn">Send Message</button>
        </form>
    </div>

<?php include("../includes/footer.php"); ?>
