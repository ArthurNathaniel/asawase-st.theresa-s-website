<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome Message - St. Theresa Parish</title>
    <?php include 'cdn.php'; ?>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="about-us.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <section>
        <div class="about-hero">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="height: 50vh; background-color:#ccc;">
                        <h1>Welcome to Asawase St. Theresa Catholic Church</h1>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="about-text">
            <h1 class="text-center">Welcome Message</h1>
            <p>
                Welcome to St. Theresa Parish, a 75-year-old Catholic church in the heart of Kumasi
                Archdiocese. Our vibrant community is dedicated to spreading the teachings of Jesus
                Christ through worship, education, and compassionate service. We gather as a diverse
                and inclusive family, united in our love for God and one another.
            </p>
            <p>
                At St. Theresa, the celebration of the Holy Eucharist lies at the center of our
                parish life. Through a variety of Masses, we provide both personal reflection and
                communal worship, inviting all to experience the transforming grace of the sacraments.
                Our clergy and dedicated leaders guide us in prayer, nurturing our spiritual growth and
                deepening our relationship with God.
            </p>
            <p>
                Beyond our worship, St. Theresa Parish is committed to lifelong faith formation and
                outreach. We offer educational programs, sacramental preparation, and opportunities for
                community engagement. Together, we strive to serve the marginalized, support local initiatives,
                and bring hope to those in need. Join us as we journey in faith, foster meaningful connections,
                and make a positive impact in our world.
            </p>
        </div>
    </section>


    <?php include 'footer.php'; ?>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>