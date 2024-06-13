<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Gallery</title>

    <!-- Stylesheets -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/callwhatsapp.css" rel="stylesheet">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>


    <!--header-->
    <?php include("header.php"); ?>


    <section class="page-title centred" style="background-image: url(images/background/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <h1>Our Gallery</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Pages</li>
                </ul>
            </div>
        </div>
    </section>

  <!-- portfolio-section -->
    <section class="gallery-page-section">
        <div class="container">
            <div class="sortable-masonry">
                <div class="filters">
<!--
                    <ul class="filter-tabs filter-btns centred clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">All</li>
                        <li class="filter" data-role="button" data-filter=".children">Children</li>
                        <li class="filter" data-role="button" data-filter=".nature ">Nature</li>
                        <li class="filter" data-role="button" data-filter=".program">Program</li>
                        <li class="filter" data-role="button" data-filter=".library">Library</li>
                    </ul>
-->
                </div>
                <div class="items-container row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all program children nature">
                        <div class="gallery-block">
                            <div class="image-box">
                                <figure class="image"><img src="images/gallery/1.jpg" alt=""></figure>
                                <div class="overlay-box"><a href="images/gallery/1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all children library">
                        <div class="gallery-block">
                            <div class="image-box">
                                <figure class="image"><img src="images/gallery/2.jpg" alt=""></figure>
                                <div class="overlay-box"><a href="images/gallery/2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all program nature">
                        <div class="gallery-block">
                            <div class="image-box">
                                <figure class="image"><img src="images/gallery/3.jpg" alt=""></figure>
                                <div class="overlay-box"><a href="images/gallery/3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all branding library">
                        <div class="gallery-block">
                            <div class="image-box">
                                <figure class="image"><img src="images/gallery/4.jpg" alt=""></figure>
                                <div class="overlay-box"><a href="images/gallery/4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all program children nature">
                        <div class="gallery-block">
                            <div class="image-box">
                                <figure class="image"><img src="images/gallery/5.jpg" alt=""></figure>
                                <div class="overlay-box"><a href="images/gallery/5.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                            </div>
                        </div>
                    </div>
                    
                   
             
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio-section end -->

    <!--footer-->
    <?php include("footer.php"); ?>

</body>

</html>
