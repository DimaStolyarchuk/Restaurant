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
                <p>© 2017 Всі права захищені
            </div>
        </div>
    </div>
</fooetr>
