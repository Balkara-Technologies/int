<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validated Form</title>
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

    <div class="container11">
        <form id="contactform" action="../index.php">
            <h2>Contact Us</h2>
            <div class="form-group">
                <label for="name" ><i class="fas fa-user"></i> Name</label>
                <input type="text" placeholder="Enter your name" id="name" name="name" required>
                          </div>
                          
            <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i> Email</label>
                <input type="email" id="email" placeholder="Enter your e-mail" name="email" required>
                
            </div>
            <div class="form-group">
                <label for="phone"><i class="fas fa-phone"></i> Phone</label>
                <input type="tel" id="phone"placeholder="Enter your Ph: +91 XXX" name="phone" pattern="[0-9]{10}" required>
            </div>
            <div class="form-group">
                <label for="message"><i class="fas fa-comment"></i> Message</label>
                <textarea placeholder="Write a  query ...." id="message" name="message" required></textarea>
            </div>
            <button class="button button1" type="submit"><i class="fas fa-paper-plane"></i> Send Message</button>
        </form>
    </div>

    <?php include "../footer.php" ?>
</body>
</html>
