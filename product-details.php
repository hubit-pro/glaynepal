<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'sharedpage/head.php' ?>
    <script>
        $(document).ready(function () {
            // MDB Lightbox Init
            $(function () {
                $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
            });
        });
    </script>
</head>

<body>
    <!-- ======= Top Bar ======= -->
   <?php include 'sharedpage/section.php' ?>
    <!-- ======= Header ======= -->
    <?php include 'sharedpage/navbar.php' ?><!-- End Header -->
    <!-- End Header -->
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Product Details</h2>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Product Details</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs -->
    <!-- ======= Portfolio Details Section ======= -->
    <section class="mb-5 " style="height:600px;">

        <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="mdb-lightbox">

                    <div class="row product-gallery mx-1 ">

                        <div class="col-12 mb-0 w-75 mx-auto d-block">
                            <figure class="view overlay rounded z-depth-1 main-img">
                                <img src="assets/img/product/allinone.jpg" class="img-fluid z-depth-1">
                            </figure>

                        </div>

                    </div>

                </div>
            </div>


            <div class="col-md-6">

                <h5>G-lay AIO(All in one) type</h5>

                <ul class="rating">
                    <li>
                        <i class="fas fa-star fa-sm text-primary">Restore friction surface of engine & protect by graphene laying.</i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-primary">Max 67% engine power improvement</i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-primary">Max 80% reduction of friction coefficient</i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-primary">8%-12% increase fuel efficiency  </i>
                    </li>
                    <li>
                        <i class="far fa-star fa-sm text-primary">
                            5 times lower noise and vibration levels
                        </i>
                    </li>
                    <li>
                        <i class="far fa-star fa-sm text-primary">
                            3-5 times emission reduction in CO and CH

                        </i>
                    </li>
                    <li>
                        <i class="far fa-star fa-sm text-primary">
                            Long life time of engine by outstanding ability of anti-wear

                        </i>
                    </li>
                    <li>
                        <i class="far fa-star fa-sm text-primary">
                            More smoother , quieter, powerful driving

                        </i>
                    </li>
                </ul>
                <p>
                    <span class="mr-1">
                        <strong>
                            Usage:Inject two 30ml pouches AIO into oil tank for any type of big engine
                            upon 25 liter oil capacity
                        </strong>
                    </span>
                </p>
                <p class="pt-1">
                    Any type of engine:petrol, diesel & CNG available
                    Inject one 30ml pouch AIO into oil tank for 4-10 liter oil capacity

                </p>


            </div>
        </div>

    </section>
    <!-- End Portfolio Details Section -->
    <!--Section: Block Content-->
    <!-- End #main -->
    <!-- ======= Footer ======= -->
 <?php include 'sharedpage/footer.php' ?><!-- End Footer -->

    <?php include 'sharedpage/scriptfooter.php' ?>
</body>

</html>