@extends('layout')

<body class="main-layout about_page">

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
                            <h2>Про нас</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about -->
        <div class="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            @foreach($dataAbouts as $dataAbout)
                            <i><img src="images/title.png" alt="#"/></i>

                                <span>{!! $dataAbout->title !!}</span>

{{--                            <span>Ми зібрали найкращих кухарів з усього світу для виготовлення найкращих страв,--}}
{{--                   <br> щоб ви могли насолоджуватися чудовою та вишуканою їжею--}}
{{--                </span>--}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="about_box">
                            <h3>{{ $dataAbout->name }}</h3>
                            <p>{{ $dataAbout->description }}</p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 about_img_boxpdnt">
                        <div class="about_img">
                            <figure><img src="{{ asset('storage/'. $dataAbout->image) }}" alt="#/"></figure>
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

