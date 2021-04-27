<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'sharedpage/head.php' ?>
</head>

<body>

    <!-- ======= Top Bar ======= -->
<?php include 'sharedpage/section.php' ?>
    <!-- ======= Header ======= -->
  <?php include 'sharedpage/navbar.php' ?><!-- End Header -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <form method="post" action="">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Contact</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>Contact</li>
                    </ol>
                </div>

        </div>
    </section>
    <section id="contact" class="contact">
        <div class="container">

            <div class="row justify-content-center" data-aos="fade-up">

                <div class="col-lg-10">

                    <div class="info-wrap">
                        <div class="row">
                            <div class="col-lg-4 info">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Butwal-11<br>Rupandehi</p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p> glaynepalandtraders@gmail.com</p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>9847338343,9847108145<br>9860771137<br></p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row mt-5 justify-content-center" data-aos="fade-up">
                <div class="col-lg-10">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="user_name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="thau" id="thau" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="chitthi" id="chitthi" rows="5" placeholder="Message" required></textarea>
                        </div>

                        <button type="submit" class="btn" style="background-color:#fd5c28;margin-top:10px;color:white">Submit</button>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
    <!-- End #main -->
    <!-- ======= Footer ======= -->
<?php include 'sharedpage/footer.php' ?><!-- End Footer -->
<?php include 'sharedpage/scriptfooter.php' ?>

</body>

</html>