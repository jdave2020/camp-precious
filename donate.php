<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camp Precious</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/font-awesome.min.css">
    <link rel="stylesheet" href="styles/owl.carousel.min.css">
    <link rel="stylesheet" href="styles/animate.css">
    <link rel="stylesheet" href="styles/slicknav.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="icon" type="image/jpg" href="img/logo.png">
</head>

<body>
    <!-- ***** Header Area Start ***** -->
    <?php include('header.php'); ?>
    <!-- ***** Header Area End ***** -->
    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg breadcam_bg_donate">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcam_text text-center">
                        <h3>Make a donation today!</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end -->

    <div class="container-fluid">
        <div class="row">

            <!-- form section -->
            <div class="col-md-8 px-5 form-area">
                <div class="heading text-center my-5 uppercase">
                    <h2>Donate Through Mobile Money</h2>
                    <h2></h2>
                </div>

                <form onsubmit="submitform(event)" id="contact-form">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="phone">Phone Number:</label>
                                <p class="form-control">+256 762 195 225</p>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="phone">Displayed Name:</label>
                                <p class="form-control">Echuman Moses</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End form section -->


            <!-- side section -->
            <div class="col-md-4 pt-5 address-area">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="my-3">
                            <h3>Make a Donation Today!</h3>
                            <p>Your benevolence can create a lasting impact on the lives of young individuals. Join us in empowering the youth by making a donation to CPI.
                                Every contribution, regardless of the amount, counts towards our goal.
                                Together, we can inspire and transform the next generation. Click here to donate and become a part of something extraordinary. We appreciate your support!</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="">
                            <h3>Support Our Mission</h3>
                            <p>
                                (Camp Precious Interdenominational Ministry) is committed to providing a safe and nurturing environment for young people to grow and thrive. Our mission is to equip them with the tools they need to succeed in life. By donating to our cause, you are investing in the future of our society.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End side section -->

        </div>
    </div>




    <!-- ***** Footer Area Start ***** -->
    <?php include('footer.php'); ?>
    <!-- ***** Footer Area End ***** -->


    <script src="scripts/vendors/jquery-1.12.4.min.js"></script>
    <script src="scripts/vendors/bootstrap.min.js"></script>
    <script src="scripts/vendors/owl.carousel.min.js"></script>
    <script src="scripts/vendors/jquery.slicknav.min.js"></script>
    <script src="scripts/app.js"></script>

    <script>
        function submitform(event) {
            event.preventDefault();
            var myData = $('#contact-form').serialize();
            // console.log(myData);
            $.ajax({
                type: "POST",
                url: "submitform.php",
                data: myData,
                cache: false,
                success: function(data) {
                    alert(data);
                    $("#contact-form").trigger("reset");
                },
                error: function(xhr, status, error) {
                    // console.error(xhr);
                    $("#contact-form").trigger("reset");

                }
            });
        }
    </script>

</body>

</html>