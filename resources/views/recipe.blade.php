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
                            <h2>Наші страви</h2>

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
                                    <h3>Солянка</h3>
                                    <h4><span class="theme_color">₴</span>120</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product_blog_img">
                                    <img src="images/rs2.png" alt="#" />
                                </div>
                                <div class="product_blog_cont">
                                    <h3>Спагеті</h3>
                                    <h4><span class="theme_color">₴</span>80</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- footer -->
        @include('footer')
    </div>
</div>
@include('scripts')
</body>
