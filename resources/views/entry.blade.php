@extends('layout')

<body class="main-layout Contact_page">

@include('loading_gif')

<div class="wrapper">

    @include('menu')

    <div id="content">

        @include('header')

        <fooetr>
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class=" col-md-12">
                            <h2>Вхід<strong class="white"></strong></h2>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row">

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Електрона адреса">
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Пароль" >
                                    </div>
                                     @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                                    <div class="col-md-12">
                                        <div class="col-md-6 offset-md-20">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-20 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Увійти') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Забули пароль?') }}
                                                </a>
                                            @endif
                                        </div>
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
    </div>
</div>
@include('scripts')
</body>
