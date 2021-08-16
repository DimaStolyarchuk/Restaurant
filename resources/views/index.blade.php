@extends('layout')

<body class="main-layout">

@include('loading_gif')

<div class="wrapper">
    @include('menu')
<div id="content">

    @include('header')

        <div class="slider_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div id="main_slider" class="carousel vert slide" data-ride="carousel" data-interval="5000">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="slider_cont">
                                                    <h3>Відкрийте для себе ресторани<br>Що доставляють біля вас</h3>
                                                    <p>Замовляйте їжу додому, в офіс та будь куди для себе рідних та друзів. І відпочивайте разом з нами</p>
                                                    <a class="main_bt_border" href="#">Зробити замовлення</a>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="slider_image full text_align_center">
                                                    <img class="img-responsive" src="images/burger_slide.png" alt="#" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="slider_cont">
                                                    <h3>Постійним замовникам<br>знижка</h3>
                                                    <p>Наших постійних клієнтів ми завжди раді бачити, тому для них існують знижки. Дізнатися про це можна перейшовши по посиланню</p>
                                                    <a class="main_bt_border" href="#">Посилання</a>
                                                </div>
                                            </div>
                                            <div class="col-md-7 full text_align_center">
                                                <div class="slider_image">
                                                    <img class="img-responsive" src="images/burger_slide.png" alt="#" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                                    <i class="fa fa-angle-up"></i>
                                </a>
                                <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="resip_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ourheading">
                            <h2>Наші страви</h2>
                        </div>
                    </div>
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
{{--                                    <div class="item">--}}
{{--                                        <div class="product_blog_img">--}}
{{--                                            <img src="images/rs3.png" alt="#" />--}}
{{--                                        </div>--}}
{{--                                        <div class="product_blog_cont">--}}
{{--                                            <h3>Egg</h3>--}}
{{--                                            <h4><span class="theme_color">$</span>30</h4>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="item">--}}
{{--                                        <div class="product_blog_img">--}}
{{--                                            <img src="images/rs4.png" alt="#" />--}}
{{--                                        </div>--}}
{{--                                        <div class="product_blog_cont">--}}
{{--                                            <h3>Sushi Dizzy</h3>--}}
{{--                                            <h4><span class="theme_color">$</span>40</h4>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="item">--}}
{{--                                        <div class="product_blog_img">--}}
{{--                                            <img src="images/rs5.png" alt="#" />--}}
{{--                                        </div>--}}
{{--                                        <div class="product_blog_cont">--}}
{{--                                            <h3>The Coffee Break</h3>--}}
{{--                                            <h4><span class="theme_color">$</span>50</h4>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="item">--}}
{{--                                        <div class="product_blog_img">--}}
{{--                                            <img src="images/rs1.png" alt="#" />--}}
{{--                                        </div>--}}
{{--                                        <div class="product_blog_cont">--}}
{{--                                            <h3>Homemade</h3>--}}
{{--                                            <h4><span class="theme_color">$</span>10</h4>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="item">--}}
{{--                                        <div class="product_blog_img">--}}
{{--                                            <img src="images/rs2.png" alt="#" />--}}
{{--                                        </div>--}}
{{--                                        <div class="product_blog_cont">--}}
{{--                                            <h3>Noodles</h3>--}}
{{--                                            <h4><span class="theme_color">$</span>20</h4>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="item">--}}
{{--                                        <div class="product_blog_img">--}}
{{--                                            <img src="images/rs3.png" alt="#" />--}}
{{--                                        </div>--}}
{{--                                        <div class="product_blog_cont">--}}
{{--                                            <h3>Egg</h3>--}}
{{--                                            <h4><span class="theme_color">$</span>30</h4>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="item">--}}
{{--                                        <div class="product_blog_img">--}}
{{--                                            <img src="images/rs4.png" alt="#" />--}}
{{--                                        </div>--}}
{{--                                        <div class="product_blog_cont">--}}
{{--                                            <h3>Sushi Dizzy</h3>--}}
{{--                                            <h4><span class="theme_color">$</span>40</h4>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="item">--}}
{{--                                        <div class="product_blog_img">--}}
{{--                                            <img src="images/rs5.png" alt="#" />--}}
{{--                                        </div>--}}
{{--                                        <div class="product_blog_cont">--}}
{{--                                            <h3>The Coffee Break</h3>--}}
{{--                                            <h4><span class="theme_color">$</span>50</h4>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="bg_bg">
            <!-- about -->
            <div class="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <i><img src="images/title.png" alt="#"/></i>
                                <h2>Про нашу їжу та ресторан</h2>
                                <span>Ми зібрали найкращих кухарів з усього світу для виготовлення найкращих страв,
                   <br> щоб ви могли насолоджуватися чудовою та вишуканою їжею
                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="about_box">
                                <h3>Одна із кращих страв</h3>
                                <p>Напевно, ви не раз готували рибу хек або минтай: запікали з овочами, смажили в паніровці, додавали в юшку та інше.
                                    Я теж буду смажити, але в паніровці з манною крупою. Незвично, згоден, але вам сподобається хрустка скоринка. І це не все.
                                    Соус Сабайон – це вишенька на торті, точніше, на моїй рибі й не вишенька, а піна. Мені подобається цей соус тим, що він універсальний:
                                    його подають як до десертів, так і м’яса, риби, і овочів. Втім, соус Сабайон цілком може претендувати на звання самостійного
                                    зробили, виклали в склянку та їжте ложкою або налийте в келих, прикрасьте полуницею та пийте. Соус Сабайон родом з Італії, із П’ємонту.
                                    Існує легенда: в XVI столітті на монастирській кухні щось пішло не так і яйця з цукром погано збили, потім ченці додали солодкого кіпрського
                                    й так вийшов цей соус. Існує й ще більш рання легенда. У 1471 році капітану Джованні Паоло Бальоні потрібно було чимось годувати своїх
                                    тому в місцевих жителів він зібрав їх припаси: яйця, цукор і вино. Він не володів кулінарними навичками, тому просто взяв і змішав всі
                                    інгредієнти. Вийшов такий собі суп, який згодом став соусом або його ще називають кремом. </p>
{{--                                <a href="#">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>--}}
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 about_img_boxpdnt">
                            <div class="about_img">
                                <figure><img src="images/about-img.jpg" alt="#/"></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end about -->

            <!-- blog -->
            <div class="blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <i><img src="images/title.png" alt="#"/></i>
                                <h2>Наш блог</h2>
                                <span>Тут ви можете дізнатися про нові страви, що у нас з'явилися</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
                            <div class="blog_box">
                                <div class="blog_img_box">
                                    <figure><img src="images/blog_img1.png" alt="#"/>
                                        <span>15 січня 2019</span>
                                    </figure>
                                </div>
                                <h3>Бургер "King"</h3>
                                <p>Класичний американський бургер для жителів США - не просто їжа, а частина життя, культури, якщо хочете!
                                    І хоча за однією з версії появи на світло цієї страви автором був емігрант з Гамбурга, це не скасовує
                                    того факту, що придумано воно було в Новому Світі. І далі справа пішла! У 1904 році на ярмарку в Сент-Луїсі
                                    бургери «розсмакували», і вони стали набирати популярність. А через 30 років, коли Уолтер Андерсон заснував
                                    в Канзасі мережа закусочних White Castle Hamburger, блюдо вже можна було сміливо називати гастрономічним
                                    символом Америки. У наш час класичний американський бургер готують по всьому світу. Але щоб бути впевненим
                                    в якості, краще спробувати відтворити цей сендвіч будинку, на власній кухні.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
                            <div class="blog_box">
                                <div class="blog_img_box">
                                    <figure><img src="images/blog_img2.png" alt="#"/>
                                        <span>21 вересня 2018</span>
                                    </figure>
                                </div>
                                <h3>Яйця та тости</h3>
                                <p>Гарний сніданок повинен бути не тільки смачним і поживним, а й дуже швидким. Адже ми всі поспішаємо у своїх справах,
                                    деколи навіть у вихідні. Саме тому більшість рецептів сніданку мають в основі або вівсянку, або яйця – продукти, які
                                    можна приготувати за лічені хвилини. Якщо говорити про яєчні сніданки, то я їх просто обожнюю, а якщо застосувати трохи
                                    фантазії, можна і їх зробити досить різноманітними. Наприклад, звичайна яєчня, французький омлет або арабська шакшука.
                                    Сьогодні ж я пропоную приготувати дуже прості і смачні тости з яйцем скрамбл. </p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="blog_box">
                                <div class="blog_img_box">
                                    <figure><img src="images/blog_img3.png" alt="#"/>
                                        <span>14 травня 2019</span>
                                    </figure>
                                </div>
                                <h3>Піцца</h3>
                                <p>Я впевнений, що багато хто з вас обожнює піцу. Мені взагалі здається, що цей дивовижний кулінарний винахід італійців вплинув
                                    на хід історії. І не тільки італійської. Це ціла індустрія з величезними оборотами грошей і полем для творчості. Класичні
                                    рецепти піци, як то «Маргарита», схоже, будуть жити вічно незалежно від моди і мінливих кулінарних уподобань. Але смак справжньої
                                    піци обумовлений не стільки її наповненням, скільки якістю тіста в її основі. Звичайно, багато чого тут залежить від якості самого
                                    борошна і нас, можливо і не вийде точно таке ж тісто, як у піцайоло в Неаполі, але це зовсім не означає, що нам не потрібно спробувати.
                                    Тим більше, що приготувати тісто для піци досить просто.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end blog -->

            <!-- Our Client -->
            <div class="Client">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <i><img src="images/title.png" alt="#"/></i>
                                <h2>Наші постійні клієнти</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="Client_box">
                                <img src="images/client.jpg" alt="#"/>
                                <h3>Шрам Дмитро</h3>
                                <p>Вперше в цей ресторан мене запросили мої друзі. Мені дуже сподобався і як виглядав сам ресторан, і які приємні люди в ньому працюють.
                                    С того часу я став постійним клієнтом цього закладу і тепер сам запрошую своїх друзів та колег сюди. Усім рекомендую ресторан SPICYO!
                                    Прийшовши сюди Ви не пошкодуєте</p>
                                <i><img src="images/client_icon.png" alt="#"/></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Our Client -->
        </div>
        <!-- footer -->
        <fooetr>
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class=" col-md-12">
                            <h2>Замовити<strong class="white"> зворотний дзвінок</strong></h2>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                            <form class="main_form">
                                <div class="row">

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Ім'я" type="text" name="Name">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Email" type="text" name="Email">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Телефон" type="text" name="Phone">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <textarea class="textarea" placeholder="Повідомлення" type="text" name="Message"></textarea>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <button class="send">Відправити</button>
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
                                <li class="active"> <a href="{{ route('index') }}">Головна сторінка</a></li>
                                <li> <a href="{{ route('about') }}">Про нас</a></li>
                                <li> <a href="{{ route('recipe') }}">Рецепти</a></li>
                                <li> <a href="{{ route('blog') }}">Блог</a></li>
                                <li> <a href="{{ route('contact') }}">Наші контакти</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <p>© 2017 Всі права захищені</p>
                    </div>
                </div>
            </div>
        </fooetr>
</div>
</div>
@include('scripts')
</body>

