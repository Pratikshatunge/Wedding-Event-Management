<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Swiper CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Custom CSS link -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">
        <?php include 'header.php'; ?>

        <section class="about">
            <img src="imgs/service-1.jpg" alt="">
            <h3>About Us</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <a href="contact.php" class="btn">Contact Us</a>
        </section>



        <section class="team">

            <h1 class="heading">our team</h1>

            <div class="box-container">
                <div class="box">
                    <img src="imgs/pratu.jpg" alt="">
                    <h3>pratiksha Tunge</h3>
                    <p>Wedding plnner</p>
                    <div class="share">
                        <a href="#" class="fab fa-facebook"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>

                <div class="box">
                    <img src="imgs/pratu.jpg" alt="">
                    <h3>Rutuja h...</h3>
                    <p>wedding decoration</p>
                    <div class="share">
                        <a href="#" class="fab fa-facebook"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>

                <div class="box">
                    <img src="imgs/gaju.jpg" alt="">
                    <h3>Gajanan shinde</h3>
                    <p>Wedding plnner</p>
                    <div class="share">
                        <a href="#" class="fab fa-facebook"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>
            </div>

        </section>

        <!-- Your content goes here -->

        <?php include 'footer.php'; ?>
    </div>

    <!-- Swiper JS link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Custom JS file link -->
    <script src="js/index.js"></script>

</body>

</html>