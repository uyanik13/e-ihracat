<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7 ltie8 ltie9" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 ltie9" lang="en-US"><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="{{ app()->getLocale() }}">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <input type="hidden" id="meta_csrf"  value="{{csrf_token()}}">
    @if ($page)
        <title>{{ $page->seo_title }}</title>
        <meta name="description" content="{{ $page->seo_description }}"/>
    @else
        <title>test</title>
        <meta name="description" content="test"/>
@endif

<!-- Favicon -->

    <!-- Mobile Meta -->

    <link rel="shortcut icon" href="{{asset('theme/images/favicon.ico')}}">

    <!-- CSS StyleSheets -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet"
          href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&amp;amp;subset=latin,latin-ext">
    <link rel="stylesheet" href="{{asset('theme/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/prettyPhoto.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('theme/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/responsive.css')}}">
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="{{asset('theme/css/ie.css')}}">
    <script type="text/javascript" src="{{asset('theme/js/html5.js')}}"></script>
    <![endif]-->

    <link rel="stylesheet" href="{{asset('theme/css/skins/defaultskin.css')}}">
</head>



<body>
@php($urlOfThis = \App\utils\Helpers\Helper::getCurrentUrl())
<!-- site preloader start -->
<div class="page-loader">
    <div class="loader-in"></div>
</div>
<!-- site preloader end -->

<div class="pageWrapper">

    <!-- login box start -->
    <div class="login-box">
        <a class="close-login" href="#"><i class="fa fa-times"></i></a>
        <form>
            <div class="container">
                <p>Sahip Olduğunuz Üyelik Bilgileri ile Aşağıdaki Formdan Giriş Yapabilirsiniz</p>
                <div class="login-controls">
                    <div class="skew-25 input-box left">
                        <input type="text" class="txt-box skew25" placeholder="E-Posta Adresi" />
                    </div>
                    <div class="skew-25 input-box left">
                        <input type="password" class="txt-box skew25" placeholder="Şifre" />
                    </div>
                    <div class="left skew-25 main-bg">
                        <input type="submit" class="btn skew25" value="Giriş Yap" />
                    </div>
                    <div class="check-box-box">
                        <input type="checkbox" class="check-box" /><label>Beni Hatırla !</label>
                        <a href="#" style="color: #f14e4f;">Şifremi Unuttum ?</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- login box End -->

    <!-- Header Start -->
    <div id="headWrapper" class="clearfix">

        <!-- top bar start -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="cell-5">
                        <ul>
                            <li><a href="#"><i class="fa fa-envelope"></i>info@eihracatturkiye.com</a></li>
                            <li><span><i class="fa fa-phone"></i> Bizi Arayın: +90 850 346 9956</span></li>
                        </ul>
                    </div>
                    <div class="cell-7 right-bar">
                        <ul class="right">
                            <li><a href="javascript:void(0);"><i class="fa fa-clock-o"></i>Çalışma Saatlerimiz:
                                    Pazartesi – Cuma: 09:00 /
                                    18:00</a></li>
                            <li><a href="register"><i class="fa fa-user"></i>Kayıt Ol</a></li>
                            <li><a href="#" class="login-btn"><i class="fa fa-unlock-alt"></i> Giriş Yap</a></li>
                            <li><a href="#" class="multiLanguage"><i class="fa fa-globe"></i> EN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- top bar end -->

        <!-- Logo, global navigation menu and search start -->
        <header class="top-head" data-sticky="true">
            <div class="container">
                <div class="row">
                    <div class="logo cell-2">
                        <a href="/">
                            <img src="{{asset('theme/images/logos/logo.png')}}" alt="eihracat-logo">
                        </a>
                    </div>
                    <div class="cell-10 top-menu">

                        <!-- top navigation menu start -->
                        <nav class="top-nav mega-menu">
                            <ul>
                                <li @if($urlOfThis == 'anasayfa' ) class="selected"@endif>
                                    <a href="/"><i class="fa fa-home"></i><span>Anasayfa</span></a>
                                </li>

                                <li @if( $urlOfThis == 'about-us' )class="selected" @endif>
                                    <a href="/about-us"><i
                                            class="fa fa-building-o"></i><span>Hakkımızda</span></a>
                                </li >

                                <li @if( $urlOfThis == 'our-services' )class="selected" @endif>
                                    <a href="javascript:void(0);"><i
                                            class="fa fa-gift"></i><span>Hizmetler</span></a>
                                    <ul>
                                        <li><a href="/our-services">Pazaryeri Entegrasyonu</a></li>
                                        <li><a href="/our-services">Global Pazarlama</a></li>
                                        <li><a href="/our-services">Online Pazaryerleri</a></li>
                                        <li><a href="/our-services">Hukuk & Lojistik Faaliyetleri</a></li>
                                    </ul>
                                </li>

                                <li @if( $urlOfThis == 'partner-list' )class="selected" @endif >
                                    <a href="/partner-list"><i class="fa fa-copy"></i><span>Partner</span></a>
                                </li >

                                <li @if( $urlOfThis == 'referances' )class="selected" @endif>
                                    <a href="/referances"><i class="fa fa-book"></i><span>Referanslar</span></a>
                                </li>

                                <li @if( $urlOfThis == 'blog' )class="selected" @endif>
                                    <a href="/blog"><i class="fa fa-newspaper-o"></i><span>Blog
												<b class="menu-hint success">Yeni</b></span></a>
                                </li>

                                <li @if( $urlOfThis == 'export-radar' )class="selected" @endif><a href="javascript:void(0);"><i class="fa fa-question"></i><span>Bilgi
												Bankası</span></a>
                                    <ul>
                                        <li><a href="/export-radar">İhracat Radarı</a></li>
                                        <li><a href="#">Devlet Teşvikleri</a></li>
                                        <li><a href="#">Döviz Radarı</a></li>
                                        <li><a href="faq.html">S.S.S</a></li>
                                    </ul>
                                </li>

                                <li @if( $urlOfThis == 'contact' )class="selected" @endif><a href="/contact"><i class="fa fa-phone"></i><span>İletişim</span></a>
                                </li>

                                <li @if( $urlOfThis == 'appointment-form' )class="selected" @endif><a href="/appointment-form"><i
                                            class="fa fa-calendar-check-o"></i><span>Randevu</span></a>
                                </li>
                            </ul>
                        </nav>
                        <!-- top navigation menu end -->

                        <!-- top search start -->
                        <div class="top-search">
                            <a href="#"><span class="fa fa-search"></span></a>
                            <div class="search-box">
                                <div class="input-box left">
                                    <input type="text" name="t" id="t-search" class="txt-box"
                                           placeHolder="Anahtar kelime girin..." />
                                </div>
                                <div class="left">
                                    <input type="submit" id="b-search" class="btn main-bg" value="Ara" />
                                </div>
                            </div>
                        </div>
                        <!-- top search end -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Logo, Global navigation menu and search end -->

    </div>
