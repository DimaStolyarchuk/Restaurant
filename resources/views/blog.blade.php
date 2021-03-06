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
                            <h2>Наш блог</h2>

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
                            <span>Тут ви можете дізнатися про нові страви, що у нас з'явилися</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($dataBlogs as $dataBlog)
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
                        <div class="blog_box">
                            <div class="blog_img_box">
                                <figure><img src="{{ asset('storage/'. $dataBlog->image) }}" alt="#"/>
                                    <span>{{ $dataBlog->date }}</span>
                                </figure>
                            </div>
                            <h3>{{ $dataBlog->name }}</h3>
                            <p>{{ $dataBlog->description }}</p>
                        </div>
                    </div>
{{--                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">--}}
{{--                        <div class="blog_box">--}}
{{--                            <div class="blog_img_box">--}}
{{--                                <figure><img src="images/blog_img2.png" alt="#"/>--}}
{{--                                    <span>21 вересня 2018</span>--}}
{{--                                </figure>--}}
{{--                            </div>--}}
{{--                            <h3>Яйця та тости</h3>--}}
{{--                            <p>Гарний сніданок повинен бути не тільки смачним і поживним, а й дуже швидким. Адже ми всі поспішаємо у своїх справах,--}}
{{--                                деколи навіть у вихідні. Саме тому більшість рецептів сніданку мають в основі або вівсянку, або яйця – продукти, які--}}
{{--                                можна приготувати за лічені хвилини. Якщо говорити про яєчні сніданки, то я їх просто обожнюю, а якщо застосувати трохи--}}
{{--                                фантазії, можна і їх зробити досить різноманітними. Наприклад, звичайна яєчня, французький омлет або арабська шакшука.--}}
{{--                                Сьогодні ж я пропоную приготувати дуже прості і смачні тости з яйцем скрамбл. </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">--}}
{{--                        <div class="blog_box">--}}
{{--                            <div class="blog_img_box">--}}
{{--                                <figure><img src="images/blog_img3.png" alt="#"/>--}}
{{--                                    <span>14 травня 2019</span>--}}
{{--                                </figure>--}}
{{--                            </div>--}}
{{--                            <h3>Піцца</h3>--}}
{{--                            <p>Я впевнений, що багато хто з вас обожнює піцу. Мені взагалі здається, що цей дивовижний кулінарний винахід італійців вплинув--}}
{{--                                на хід історії. І не тільки італійської. Це ціла індустрія з величезними оборотами грошей і полем для творчості. Класичні--}}
{{--                                рецепти піци, як то «Маргарита», схоже, будуть жити вічно незалежно від моди і мінливих кулінарних уподобань. Але смак справжньої--}}
{{--                                піци обумовлений не стільки її наповненням, скільки якістю тіста в її основі. Звичайно, багато чого тут залежить від якості самого--}}
{{--                                борошна і нас, можливо і не вийде точно таке ж тісто, як у піцайоло в Неаполі, але це зовсім не означає, що нам не потрібно спробувати.--}}
{{--                                Тим більше, що приготувати тісто для піци досить просто.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    @endforeach
                </div>
            </div>
        </div>
        @include('footer')
    </div>
</div>
@include('scripts')
</body>
