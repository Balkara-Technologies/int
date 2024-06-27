
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="../../css/desktop.css">
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
    <?php include "../../header.php"  ?>
    <style>

#hero {
    background: url('your-image.jpg') no-repeat center center/cover;
    color: #fff;
    text-align: center;
    padding: 2em 0;
}

#hero .button {
    background: #61dafb;
    color: #282c34;
    padding: 0.5em 1em;
    text-decoration: none;
    border-radius: 5px;
}

#services {
    padding: 2em 0;
    text-align: center;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1em;
}

.service-item {
    background: #f4f4f4;
    padding: 1em;
    border-radius: 5px;
}

#about {
    background: #f9f9f9;
    padding: 2em 0;
    text-align: center;
}



    </style>
</head>
<body>

    <section id="hero">
        <div class="container">
            <h2>Meet our Expert Team</h2>
            <p>Our psychiatrists are highly skilled to meet your unique needs.</p>
            <a href="#team" class="button">Meet Psychiatrist</a>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="services-grid">
                <div class="service-item">
                    <h3>Desktop Service</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="service-item">
                    <h3>Laptop Service</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="service-item">
                    <h3>Data Recovery</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="service-item">
                    <h3>Software Installations</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="service-item">
                    <h3>Motherboard Service</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="service-item">
                    <h3>Computer Networking</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <h2>About Smart Computers</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt rutrum quam quis fermentum.</p>
        </div>
    </section>

    <?php include "../../footer.php"  ?>

</body>
</html>
