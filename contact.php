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
    <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcam_text text-center">
                        <h3>Contact Us</h3>
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
                    <h2>Get in Touch</h2>
                    <h2></h2>
                </div>

                <form onsubmit="submitform(event)" id="contact-form">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input id="name" type="text" name="name" placeholder="Your Name" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="phone">Phone Number:</label>
                                <input id="phone" type="tel" placeholder="Phone Number" name="phone" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input id="email" type="text" placeholder="email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="subject">Subject:</label>
                                <input id="subject" type="text" placeholder=" subject..." name="subject" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea id="message" name="message" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 text-center">
                            <button type="submit" name="submit" class="btn button-1 btn-4">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End form section -->


            <!-- side section -->
            <div class="col-md-4 pt-5 address-area">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="">
                            <div class="icons pt-2"><i class="fa fa-map-marker"></i></div>
                            <h3>Address</h3>
                            <p>P.O Box<br>175<br>Moroto,
                                <strong>Uganda</strong>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="my-3">
                            <div class="icons pt-2"><i class="fa fa-phone"></i></div>
                            <h3>Call center</h3>
                            <p>Reach us on this number. We also advise that you use the electronic form of communication
                                in order to avoid phone carrier costs.</p>
                            <p><strong>(+256) 762 195 225, (+256)772 926 367</strong></p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="my-3">
                            <div class="icons pt-2"><i class="fa fa-envelope"></i></div>
                            <h3>Electronic support</h3>
                            <p>Please feel free to write an email to us or to use our electronic ticketing system.</p>
                            <ul class="list-unstyled text-sm">
                                <li><strong><a href="mailto:">camprecious22@gmail.com</a></strong></li>
                                <li><strong><a href="#">CampPreciousTeam</a></strong> - our support platform</li>
                            </ul>
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