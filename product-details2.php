<!DOCTYPE html>
<html lang="en">

<head>
    <?php include  'sharedpage/head.php' ?>

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
<?php include  'sharedpage/section.php' ?>
    <!-- ======= Header ======= -->
   <?php include  'sharedpage/navbar.php' ?><!-- End Header -->
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
                                <img src="assets/img/product/universalglay.jpeg" class="img-fluid z-depth-1">
                            </figure>

                        </div>

                    </div>

                </div>
            </div>


            <div class="col-md-6">

                <h5>G-lay Universal type</h5>

                <ul class="rating">
                    <li>
                        <i class="fas fa-star fa-sm text-primary">Restoration & protection  of worn-out metallic surface.</i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-primary">Outstanding extension of life time for chain,bearing,pivot,etc</i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-primary">Great reduction of friction and abrasion </i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-primary">Great reduction of mechanical failure at lubrication system </i>
                    </li>
                    <li>
                        <i class="far fa-star fa-sm text-primary">Great reduction of noisy on operating art </i>
                    </li>
                    <li>
                        <i class="far fa-star fa-sm text-primary">Temperature down on friction part  </i>
                    </li>
                    <li>
                        <i class="far fa-star fa-sm text-primary">More suitable for high speed bearign and machine </i>
                    </li>


                </ul>
                <p><span class="mr-1"><strong>Usage:inject 30 ML pouch universal restorer</strong></span></p>
                <p class="pt-1">
                    G-lay universal restorer(smaller)
                    Smaller engine :less than any types of 600 cc engine
                    motorcycle, 3 wheeler,
                    any types of metallic mechanism
                    compressor, Bearing ,Gear box ,
                    transmiossion case,differential power steering
                    various kinds of machine tool
                    convey belt, etc
                </p>


            </div>
        </div>

    </section>
    <!-- End Portfolio Details Section -->
    <!--Section: Block Content-->
    <!-- End #main -->
    <!-- ======= Footer ======= -->
  <?php include  'sharedpage/footer.php' ?><!-- End Footer -->
<?php include  'sharedpage/scriptfooter.php' ?>

</body>

</html>