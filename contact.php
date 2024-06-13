<!DOCTYPE html>
<html>

<head>
  
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Little Bum Preschool & Daycare</title>

    <!-- Stylesheets -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/callwhatsapp.css" rel="stylesheet">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">  
    
</head>

<body>


    <!--header-->
    <?php include("header.php"); ?>

 <!--Page Title-->
    <section class="page-title centred" style="background-image: url(images/background/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <h1>Contact</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- contact-info-section -->
    <section class="contact-info-section sec-pad centred">
        <div class="container">
            <div class="sec-title">
                <h5>Contact</h5>
                <h1>Get In Touch</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                    <div class="single-info-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-address"></i></div>
                            <h3>Our Location</h3>
                            <div class="text">A-02, Jai Goverdhan Apartment, L T Road, Near Tanishq, <br />Borivali West, Mumbai (Maharashtra) - 400092.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                    <div class="single-info-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-vintage-hand-phone"></i></div>
                            <h3>Phone Number</h3>
                            <div class="text">
                                <a href="tel:(+55)654-545-5418">+91 8850224105</a><br />
<!--                                <a href="tel:(+55)654-545-1235">(+55)  654 - 545 - 1235</a>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12  info-column">
                    <div class="single-info-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-mail"></i></div>
                            <h3>Email Address</h3>
                            <div class="text">
                                <a href="mailto:info@example.com">charuseduhub@gmail.com</a><br />
<!--                                <a href="mailto:info@templatepath.com">info@templatepath.com</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-info-section end -->


    <!-- contact-form-section -->
    <section class="contact-form-section sec-pad">
        <div class="container">
            <div class="sec-title centred">
                <h5>Enquiry</h5>
                <h1>Leave a Message</h1>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 offset-lg-2 form-column">
                    <div class="contact-form">
                        <form method="post" action="http://azim.commonsupport.com/Kidko/sendemail.php" id="contact-form" class="default-form"> 
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Your Name*" required>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Your Email*" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone number" required>
                                </div>
<!--
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div>
-->
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Write here message"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                                    <button type="submit" class="theme-btn" name="submit-form">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-form-section end -->


    <!-- google-map-section -->
    <section class="google-map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15069.004379954884!2d72.8529495!3d19.2278856!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b178815c1147%3A0x3f4b11fdea4c2378!2sLittle%20Bum%20PreSchool%2C%20Day%20care%20and%20kds%20activities%20centre!5e0!3m2!1sen!2sin!4v1717493567547!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <!-- google-map-section end -->




     
    <!--footer-->
    <?php include("footer.php"); ?>

</body>

</html>
