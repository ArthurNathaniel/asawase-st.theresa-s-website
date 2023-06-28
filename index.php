<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - St. Theresa's Parish</title>
    <?php include 'cdn.php'; ?>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <section>
        <div class="row hero">
            <div class="col-md-7">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide hero-img" style="background-color: #cbcd84;">Image one</div>
                        <div class="swiper-slide hero-img" style="background-color: #f4f8f4;">Image Two</div>
                    </div>
                </div>


            </div>
            <div class="col-md-5 second">
                <div class="swiper mySwiper hero-text">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <h1>Welcome to Asawase St. Theresa's Catholic Church</h1>
                        </div>
                        <div class="swiper-slide">
                            <h1>Roman Deɛ Ɛnoaa ne Asawase,
                                Wopɛ Adepa bra Asawase
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="swiper mySwiper">

                    <h4 class="event-title">Upcoming Events</h4>

                    <div class="swiper-wrapper events">
                        <div class="swiper-slide up-events">
                            <div class="events-img" style="background-image: url(./images/event-one.jpg);">
                            </div>
                            <div class="events-details">
                                <h4>75th Anniversary celebrations</h4>
                                <h5><i class="fa fa-calendar"></i> July - October</h5>
                                <h5><i class="fa fa-map-marker"></i> Asawase Parish</h5>
                                <button class="events-btn">Read More...</button>
                            </div>
                        </div>
                        <div class="swiper-slide up-events">
                            <div class="events-img">
                            </div>
                            <div class="events-details">
                                <h4>Announcement for the Week</h4>
                                <h5><i class="fa fa-calendar"></i> July - October</h5>
                                <h5><i class="fa fa-map-marker"></i> Asawase Parish</h5>
                                <button class="events-btn">Read More...</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="row about-grid">
            <div class="about-text">
                <h5>ASAWASE ST. THERESA'S CATHOLIC CHURCH</h5>
                <h1>About Us</h1>
                <p>
                    Welcome to St. Theresa's Parish, a 75-year-old Catholic church in the heart of Kumasi
                    Archdiocese. Our vibrant community is dedicated to spreading the teachings of Jesus
                    Christ through worship, education, and compassionate service. We gather as a diverse
                    and inclusive family, united in our love for God and one another.
                </p>
                <p>
                    At St. Theresa's, the celebration of the Holy Eucharist lies at the center of our
                    parish life. Through a variety of Masses, we provide both personal reflection and
                    communal worship, inviting all to experience the transforming grace of the sacraments.
                    Our clergy and dedicated leaders guide us in prayer, nurturing our spiritual growth and
                    deepening our relationship with God.
                </p>
                <p>
                    Beyond our worship, St. Theresa's Parish is committed to lifelong faith formation and
                    outreach. We offer educational programs, sacramental preparation, and opportunities for
                    community engagement. Together, we strive to serve the marginalized, support local initiatives,
                    and bring hope to those in need. Join us as we journey in faith, foster meaningful connections,
                    and make a positive impact in our world.
                </p>
            </div>
            <div class="about-img" style="background:#ccc; height:450px;">
                image one
            </div>
        </div>
    </section>


    <section id="event">
        <div class="events-heading">
            <h1>Upcoming events at St. Theresa's Parish</h1>
        </div>
        <div class="events-grid">
            <div class="events-box">
                <div class="event-box-img">

                </div>
                <div class="event-box-details">
                    <h3>Hello</h3>
                    <h5><i class="fa fa-calendar"></i> July - October</h5>
                    <h5><i class="fa fa-map-marker"></i> Asawase Parish</h5>
                    <button class="events-btn">Read More...</button>
                </div>
            </div>
            <div class="events-box">
                <div class="event-box-img">

                </div>
                <div class="event-box-details">
                    <h3>Hello</h3>
                    <h5><i class="fa fa-calendar"></i> July - October</h5>
                    <h5><i class="fa fa-map-marker"></i> Asawase Parish</h5>
                    <button class="events-btn">Read More...</button>
                </div>
            </div>
            <div class="events-box">
                <div class="event-box-img">

                </div>
                <div class="event-box-details">
                    <h3>Hello</h3>
                    <h5><i class="fa fa-calendar"></i> July - October</h5>
                    <h5><i class="fa fa-map-marker"></i> Asawase Parish</h5>
                    <button class="events-btn">Read More...</button>
                </div>
            </div>
            <div class="events-box">
                <div class="event-box-img">

                </div>
                <div class="event-box-details">
                    <h3>Hello</h3>
                    <h5><i class="fa fa-calendar"></i> July - October</h5>
                    <h5><i class="fa fa-map-marker"></i> Asawase Parish</h5>
                    <button class="events-btn">Read More...</button>
                </div>
            </div>
        </div>
    </section>
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