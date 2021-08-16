@extends('layout')

<body class="main-layout Recipes_page">

@include('loading_gif')

<div class="wrapper">

    @include('menu')

    <div id="content">

    @include('header')

        <div class="yellow_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Our Recipes</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section -->
        <section class="resip_section">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">

                            <div class="item">
                                <div class="product_blog_img">
                                    <img src="images/rs1.png" alt="#" />
                                </div>
                                <div class="product_blog_cont">
                                    <h3>Homemade</h3>
                                    <h4><span class="theme_color">$</span>10</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product_blog_img">
                                    <img src="images/rs2.png" alt="#" />
                                </div>
                                <div class="product_blog_cont">
                                    <h3>Noodles</h3>
                                    <h4><span class="theme_color">$</span>20</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product_blog_img">
                                    <img src="images/rs3.png" alt="#" />
                                </div>
                                <div class="product_blog_cont">
                                    <h3>Egg</h3>
                                    <h4><span class="theme_color">$</span>30</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product_blog_img">
                                    <img src="images/rs4.png" alt="#" />
                                </div>
                                <div class="product_blog_cont">
                                    <h3>Sushi Dizzy</h3>
                                    <h4><span class="theme_color">$</span>40</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product_blog_img">
                                    <img src="images/rs5.png" alt="#" />
                                </div>
                                <div class="product_blog_cont">
                                    <h3>The Coffee Break</h3>
                                    <h4><span class="theme_color">$</span>50</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product_blog_img">
                                    <img src="images/rs1.png" alt="#" />
                                </div>
                                <div class="product_blog_cont">
                                    <h3>Homemade</h3>
                                    <h4><span class="theme_color">$</span>10</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product_blog_img">
                                    <img src="images/rs2.png" alt="#" />
                                </div>
                                <div class="product_blog_cont">
                                    <h3>Noodles</h3>
                                    <h4><span class="theme_color">$</span>20</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product_blog_img">
                                    <img src="images/rs3.png" alt="#" />
                                </div>
                                <div class="product_blog_cont">
                                    <h3>Egg</h3>
                                    <h4><span class="theme_color">$</span>30</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product_blog_img">
                                    <img src="images/rs4.png" alt="#" />
                                </div>
                                <div class="product_blog_cont">
                                    <h3>Sushi Dizzy</h3>
                                    <h4><span class="theme_color">$</span>40</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product_blog_img">
                                    <img src="images/rs5.png" alt="#" />
                                </div>
                                <div class="product_blog_cont">
                                    <h3>The Coffee Break</h3>
                                    <h4><span class="theme_color">$</span>50</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- footer -->
        <fooetr>
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class=" col-md-12">
                            <h2>Request  A<strong class="white"> Call  Back</strong></h2>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                            <form class="main_form">
                                <div class="row">

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Name" type="text" name="Name">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Email" type="text" name="Email">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Phone" type="text" name="Phone">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <button class="send">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="img-box">
                                <figure><img src="images/img.jpg" alt="img" /></figure>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer_logo">
                                <a href="index.html"><img src="images/logo1.jpg" alt="logo" /></a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <ul class="lik">
                                <li > <a href="index.html">Home</a></li>
                                <li> <a href="about.html">About</a></li>
                                <li class="active"> <a href="recipe.html">Recipe</a></li>
                                <li> <a href="blog.html">blog</a></li>
                                <li> <a href="contact.html">Contact us</a></li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="new">
                                <h3>Newsletter</h3>
                                <form class="newtetter">
                                    <input class="tetter" placeholder="Your email" type="text" name="Your email">
                                    <button class="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
                    </div>
                </div>
            </div>
        </fooetr>
        <!-- end footer -->

    </div>
</div>
<div class="overlay"></div>
<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

<script src="js/jquery-3.0.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#dismiss, .overlay').on('click', function() {
            $('#sidebar').removeClass('active');
            $('.overlay').removeClass('active');
        });

        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').addClass('active');
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>

<script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 5
                }
            }
        })
    })
</script>

</body>

</html>
