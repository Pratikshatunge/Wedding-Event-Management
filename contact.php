

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">
        <?php include 'header.php'; ?>

        <section class="contact">

            <h1 class="heading">Contact Us</h1>

            <form action="ContactDB.php" method="POST">

                <div class="flex">

                    <div class=" inputBox">
                        <Span> Your Name</Span>
                        <input type="text" placeholder="Enter Your Good Name" name="name" required>
                    </div>

                    <div class=" inputBox">
                        <Span> Your E-mail</Span>
                        <input type="text" placeholder="Enter Your E-mail" name="email" required>
                    </div>

                    <div class=" inputBox">
                        <Span> Your Number</Span>
                        <input type="text" placeholder="Enter Your Phone Number" name="number" required>
                    </div>

                    <div class=" inputBox">
                        <Span>Choose Plan</Span>
                        <select name="plan">
                            <option value="Basic">Basic Plan</option>
                            <option value="Premium">Premium Plan</option>
                            <option value="Ultimate">Ultimate Plan</option>
                        </select>
                    </div>

                    <div class=" inputBox">
                        <Span>Enter Address</Span>
                        <textarea name="address" placeholder="Enter your address" required cols="30" rows="10"></textarea>
                    </div>


                    <div class=" inputBox">
                        <Span>Your Massage</Span>
                        <textarea name="message" placeholder="Enter your Masssage" required cols="30" rows="10"></textarea>
                    </div>

                </div>
                <input type="submit" value="send message" name="send" class="btn">
            </form>

        </section>

        <!-- Your content goes here -->

        <?php include 'footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="index.js"></script>

</body>

</html>