<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing Table</title>
    <title>BT Technologies New Delhi | Web & Graphic Design Training | +91 9289218921</title>
    <meta name="description" content="Contact BT Technologies for expert IT solutions tailored to your needs. Fill out our form with your name, email, phone, address, and message, and our team will respond promptly. Reach out today!"
>    <meta name="author" content="https://balkaratechnologies.com/">

    <link rel="stylesheet" href="../css/desktop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
 <!-- Google tag (gtag.js) -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=G-5SNHPD0QJR"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-5SNHPD0QJR');
        </script>
</head>
<body>
    <?php include "../header.php" ?>
<div class="body111">  
    <div class="container11">
        <form id="contactForm11" novalidate>
            <h2>Contact Us</h2>
            <div class="form-group1">
                <label for="name"><i class="fas fa-user"></i> Name</label>
                <input placeholder="Please enter our name" type="text" id="name" name="name" required>
            </div>
            <div class="form-group1">
                <label for="email"><i class="fas fa-envelope"></i> Email</label>
                <input placeholder="Please enter  xxx@gmail.com" type="email" id="email" name="email" required>
            </div>
            <div class="form-group1">
                <label for="phone"><i class="fas fa-phone"></i> Phone</label>
                <input placeholder="Please enter  Ph +91 xxxxx ..." type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
            </div> 

            <div class="form-group1">
                <label for="message"><i class="fas fa-comment"></i> Address</label>
                <textarea placeholder="Please enter  Address ..." id="message" name="message" required></textarea>
            </div>
            <div class="form-group1">
                <label for="message"><i class="fas fa-comment"></i> Message</label>
                <textarea placeholder="Please enter  message ..." id="message" name="message" required></textarea>
            </div>
            <button class="button button1" type="submit"><i class="fas fa-paper-plane"></i> Send Message</button>
        </form>
    </div>
</div>
    <?php include "../footer.php" ?>
</body>
</html>
