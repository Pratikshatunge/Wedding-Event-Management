<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">

        <?php include 'header.php'; ?>

        <section class="home">
            <div class=" home-slider">
                <div class="w">
                    <div class="slide" style="background:url(imgs/ceremony.jpg) no-repeat">
                        <div class="content">
                            <h3>Plan Your Wedding!</h3>
                            <p>Your content goes here. Tere bin nay lagda dil mera soniya</p>
                            <a href="about.php" class="btn">Discover More</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <section class="services">
            <h1 class="heading">Our Services</h1>
            <div class="swiper service-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide">
                        <img src="imgs/service-1.jpg" alt="">
                        <div class="content">
                            <h3>Photography</h3>
                            <p>hii welcome to our community</p>
                            <a href="about.php" class="btn">About</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="imgs/service-2.webp" alt="">
                        <div class="content">
                            <h3>Wedding registory</h3>
                            <p>hii welcome to our community</p>
                            <a href="about.php" class="btn">About</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="imgs/service-3.jpg" alt="">
                        <div class="content">
                            <h3>Guest List</h3>
                            <p>hii welcome to our community</p>
                            <a href="about.php" class="btn">About</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="imgs/service-4.jpg" alt="">
                        <div class="content">
                            <h3>Wedding Cake</h3>
                            <p>hii welcome to our community</p>
                            <a href="about.php" class="btn">About</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="imgs/service-5.jpg" alt="">
                        <div class="content">
                            <h3>Wedding Ceremony</h3>
                            <p>hii welcome to our community</p>
                            <a href="about.php" class="btn">About</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <img src="imgs/service-6.jpg" alt="">
                        <div class="content">
                            <h3>Fine dining</h3>
                            <p>hii welcome to our community</p>
                            <a href="about.php" class="btn">About</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        </section>

        <?php include 'footer.php'; ?>
    </div>
    <script src="js/script.js"></script>

</body>

</html>