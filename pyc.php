<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PYC Executives - St. Theresa Parish</title>
    <?php include 'cdn.php'; ?>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="spc.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <section>
        <div class="about-hero">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="height: 50vh; background-color:#ccc;">
                        <h1>Image</h1>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="spc-heading">
            <h1 class="text-center">PYC Executives</h1>
        </div>

        <div class="spc-grid">
            <div class="spc-profile">
                <div class="spc-profile-img">

                </div>
                <div class="spc-profile-details">
                    <div class="spc-name">
                        <h4>hello World</h4>
                        <h5>President</h5>
                    </div>
                </div>
            </div>
            <div class="spc-profile">
                <div class="spc-profile-img">

                </div>
                <div class="spc-profile-details">
                    <div class="spc-name">
                        <h4>hello World</h4>
                        <h5>President</h5>
                    </div>
                </div>
            </div>
            <div class="spc-profile">
                <div class="spc-profile-img">

                </div>
                <div class="spc-profile-details">
                    <div class="spc-name">
                        <h4>hello World</h4>
                        <h5>President</h5>
                    </div>
                </div>
            </div>
            <div class="spc-profile">
                <div class="spc-profile-img">

                </div>
                <div class="spc-profile-details">
                    <div class="spc-name">
                        <h4>hello World</h4>
                        <h5>President</h5>
                    </div>
                </div>
            </div>
            <div class="spc-profile">
                <div class="spc-profile-img">

                </div>
                <div class="spc-profile-details">
                    <div class="spc-name">
                        <h4>hello World</h4>
                        <h5>President</h5>
                    </div>
                </div>
            </div>
            <div class="spc-profile">
                <div class="spc-profile-img">

                </div>
                <div class="spc-profile-details">
                    <div class="spc-name">
                        <h4>hello World</h4>
                        <h5>President</h5>
                    </div>
                </div>
            </div>

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