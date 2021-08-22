<header>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="full">
                <a class="logo" href='{{ asset('index.html') }}'><img src='{{ asset('images/logo.png') }}' alt="#" /></a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="full">
                <div class="right_header_info">
                    <ul>
                        <li class="dinone">Наш телефон : <img style="margin-right: 15px;margin-left: 15px;" src='{{ asset('images/phone_icon.png') }}' alt="#">097-444-55-66</li>
                        <li class="dinone"><img style="margin-right: 15px;" src='{{ asset('images/mail_icon.png') }}' alt="#">demo@gmail.com</li>
                        <li class="dinone"><img style="margin-right: 15px;height: 21px;position: relative;top: -2px;" src='{{ asset('images/location_icon.png') }}' alt="#">Київ, вул. Кучера 9а</li>

                            @guest
                                @if (Route::has('register'))
                                <li class="button_user"><a class="button active" href="{{ route('registration') }}">Зареєструватися</a></li>
                                @endif
                                <li class="button_user"><a class="button active" href="entry">Вхід</a></li>
                                 @else
                            <li class="dinone">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" style="color: #0a0e14!important"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Вихід
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                        <li><img style="margin-right: 15px;" src='{{ asset('images/search_icon.png') }}' alt="#"></li>
                        <li>
                            <button type="button" id="sidebarCollapse">
                                <img src='{{ asset('images/menu_icon.png') }}' alt="#">
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
