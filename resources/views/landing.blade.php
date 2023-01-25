<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1" />
    <title>Travel Website</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,500;0,600;1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.min.css">
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.min.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
</head>

<body>
    @include('navbar')

    <header>
        <div class="container">
            <div class="header-info-par">
                <h1 class="typewrite" data-period="2000"
                    data-type='["Happiness is closer than you think","Adventure Awaits, go find it.","Dont be a tourist, be a traveler."]'>
                </h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, ea. Mollitia maiores voluptatum
                    vitae suscipit tenetur ut officiis assumenda ipsam.</p>
                <a href="#" class="a">Read More</a>
            </div>
            <div class="video">
                <video id="video" autoplay loop muted>
                    <source src="images/travel-video.mp4" type="video/mp4" />
                </video>
            </div>
        </div>
    </header>
    <!-- Second Slides Section -->
    <section id="welcome-text">
        <div class="container">
            <h2>The Official Travel Site of the friendly Fiji Islands</h2>
            <p>when an unknown printer took a gallery of type and scrambled it to make a type speicmen</p>
        </div>
    </section>
    <!-- Slides Section Start-->
    <section id="slides-par">
        <div class="container">
            <div class="slides">
                <div class="slide_1 slide_2">
                    <div class="slide-info">
                        <p>Outer Islands</p>
                    </div>
                </div>
                <div class="slide_1 slide_3">
                    <div class="slide-info">
                        <p>Pacific Harbour and Beqa</p>
                    </div>
                </div>
                <div class="slide_1 slide_4">
                    <div class="slide-info">
                        <p>Savusavu & Surrounds</p>
                    </div>
                </div>
                <div class="slide_1 slide_5">
                    <div class="slide-info">
                        <p>Suncoast</p>
                    </div>
                </div>
                <div class="slide_1 slide_6">
                    <div class="slide-info">
                        <p>Taveun1</p>
                    </div>
                </div>
                <div class="slide_1 slide_7">
                    <div class="slide-info">
                        <p>Yasawa Islands</p>
                    </div>
                </div>
                <div class="slide_1 slide_8">
                    <div class="slide-info">
                        <p>Nadi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slides Section Start-->


    <!-- Gallery Section Starts -->
    <section id="gallery">
        <div class="container">
            <div class="row">
                <div align="center" class="filter-btn-par">
                    <button class="filter-button" data-filter="all">ALL</button>
                    <button class="filter-button" data-filter="diving">DIVING</button>
                    <button class="filter-button" data-filter="nature">NATURE</button>
                    <button class="filter-button" data-filter="health">HEALTH</button>
                </div>
                <div class="filter-gal-par">
                    <div class="gallery-item filter diving">
                        <img src="images/fiji-surprise/diving1.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="gallery-item filter diving">
                        <img src="images/fiji-surprise/diving2.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="gallery-item filter diving">
                        <img src="images/fiji-surprise/diving3.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="gallery-item filter health">
                        <img src="images/fiji-surprise/health1.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="gallery-item filter health">
                        <img src="images/fiji-surprise/health2.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="gallery-item filter nature">
                        <img src="images/fiji-surprise/nature1.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="gallery-item filter nature">
                        <img src="images/fiji-surprise/nature2.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="gallery-item filter nature">
                        <img src="images/fiji-surprise/nature3.jpg" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Section Ends -->

    <!-- Mutiple Slider Section Starts -->
    <section id="water-slider">
        <div class="container">
            <h3>Start Planning Your Dream Holiday</h3>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/slider/bangcok.jpg" alt="" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Bangkok</h3>
                            <p>THAILAND</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/slider/Rome.jpg" alt="" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Rome</h3>
                            <p>ITALY</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/slider/cario.jpg" alt="" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Cairo</h3>
                            <p>EGYPT</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/slider/dubai.jpg" alt="" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Dubai</h3>
                            <p>EMIRATES</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/slider/nassau.jpg" alt="" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Nassau</h3>
                            <p>BAHAMAS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section Starts -->
    <section id="blog">
        <div class="container">
            <h3>News And Events</h3>
            <div class="blog-par">
                <div class="blog-content">
                    <!-- one div for image and one for info -->
                    <div class="blog-img-par">
                        <img src="images/slider/bangcok.jpg" alt="" class="img-responsive">

                    </div>
                    <div class="blog-info-par">
                        <ul>
                            <li>Chiru Vishnoi</li>
                            <li>24.08.2021</li>
                        </ul>
                        <h4>Lorem ipsum dolor consectetur</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut natus, deserunt deleniti
                            sapiente omnis ab quas mollitia! Cumque, maxime at.</p>

                    </div>
                </div>
                <div class="blog-content">
                    <!-- one div for image and one for info -->
                    <div class="blog-img-par">
                        <img src="images/slider/cario.jpg" alt="" class="img-responsive">

                    </div>
                    <div class="blog-info-par">
                        <ul>
                            <li>Chiru Vishnoi</li>
                            <li>24.08.2021</li>
                        </ul>
                        <h4>Lorem ipsum dolor consectetur</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut natus, deserunt deleniti
                            sapiente omnis ab quas mollitia! Cumque, maxime at.</p>

                    </div>
                </div>
            </div>
            <div class="blog-par">
                <div class="blog-content">
                    <!-- one div for image and one for info -->
                    <div class="blog-img-par">
                        <img src="images/slider/bangcok.jpg" alt="" class="img-responsive">

                    </div>
                    <div class="blog-info-par">
                        <ul>
                            <li>Chiru Vishnoi</li>
                            <li>24.08.2021</li>
                        </ul>
                        <h4>Lorem ipsum dolor consectetur</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut natus, deserunt deleniti
                            sapiente omnis ab quas mollitia! Cumque, maxime at.</p>

                    </div>
                </div>
                <div class="blog-content">
                    <!-- one div for image and one for info -->
                    <div class="blog-img-par">
                        <img src="images/slider/cario.jpg" alt="" class="img-responsive">

                    </div>
                    <div class="blog-info-par">
                        <ul>
                            <li>Chiru Vishnoi</li>
                            <li>24.08.2021</li>
                        </ul>
                        <h4>Lorem ipsum dolor consectetur</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut natus, deserunt deleniti
                            sapiente omnis ab quas mollitia! Cumque, maxime at.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Mutiple Slider Section Ends -->

@include('footer')

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/extrenaljq.js"></script>
</body>

</html>