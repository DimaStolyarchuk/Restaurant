@extends('layout')

<body class="main-layout blog_page">

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
                            <h2>Our Blog</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- blog -->
        <div class="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <i><img src="images/title.png" alt="#"/></i>

                            <span>when looking at its layout. The point of using Lorem</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
                        <div class="blog_box">
                            <div class="blog_img_box">
                                <figure><img src="images/blog_img1.png" alt="#"/>
                                    <span>02 FEB 2019</span>
                                </figure>
                            </div>
                            <h3>Spicy Barger</h3>
                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
                        <div class="blog_box">
                            <div class="blog_img_box">
                                <figure><img src="images/blog_img2.png" alt="#"/>
                                    <span>02 FEB 2019</span>
                                </figure>
                            </div>
                            <h3>Egg & Tosh</h3>
                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="blog_box">
                            <div class="blog_img_box">
                                <figure><img src="images/blog_img3.png" alt="#"/>
                                    <span>02 FEB 2019</span>
                                </figure>
                            </div>
                            <h3>Pizza</h3>
                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end blog -->


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
                                <li> <a href="recipe.html">Recipe</a></li>
                                <li class="active"> <a href="blog.html">Blog</a></li>
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

</body>

</html>
