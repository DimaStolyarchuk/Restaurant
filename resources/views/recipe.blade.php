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
                            @foreach($dataRecipes as $dataRecipe)
                            <div class="item">
                                <div class="product_blog_img">
                                    <img src="{{ asset('storage/'. $dataRecipe->image) }}" alt="#" />
                                </div>
                                <div class="product_blog_cont">
                                    <h3>{{ $dataRecipe->name }}</h3>
                                    <h4><span class="theme_color">₴</span>{{ $dataRecipe->price }}</h4>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @include('footer')
    </div>
</div>
@include('scripts')
</body>
