@php
    $findServiceswithoutId5 = Helper::findServiceswithoutId5();
@endphp
</head>
<body>

<!-- site preloader start -->
{{-- <div class="page-loader">
    <div class="loader-in"></div>
</div>--}}
<!-- site preloader end -->

<div class="pageWrapper">

    <!-- login box start -->

    <!-- login box End -->

    <!-- Header Start -->
    <div id="headWrapper" class="clearfix">

        <!-- top bar start -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="cell-5">
                        <ul>
                            <li><a href="#"><i class="fa fa-envelope"></i>@isset($setting['email']) {{ $setting['email']->value }} @endisset</a></li>
                            <li><span><i class="fa fa-phone"></i> Bizi Arayın: @isset($setting['phone']) {{ $setting['phone']->value }} @endisset</span></li>
                        </ul>
                    </div>
                    <div class="cell-7 right-bar">
                        <ul class="right">
                            <li><a href="javascript:void(0);"><i class="fa fa-clock-o"></i>Çalışma Saatlerimiz:
                                    Pazartesi – Cuma: 09:00 /
                                    18:00</a></li>
                            <li><a href="/panel/register"><i class="fa fa-user"></i>Kayıt Ol</a></li>
                            <li><a href="/panel/login" class=""><i class="fa fa-unlock-alt"></i> Giriş Yap</a></li>
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
                            <img src="@isset($setting['logo']) {{ $setting['logo']->value }} @endisset" alt="eihracat-logo">
                        </a>
                    </div>
                    <div class="cell-10 top-menu">

                        <!-- top navigation menu start -->
                        <nav class="top-nav mega-menu">
                            <ul>
                                <li @if($category == 'anasayfa' ) class="selected"@endif>
                                    <a href="/"><i class="fa fa-home"></i><span>Anasayfa</span></a>
                                </li>

                                <li @if( $category == 'about-us' )class="selected" @endif>
                                    <a href="/about-us"><i
                                            class="fa fa-building-o"></i><span>Hakkımızda</span></a>
                                </li >

                                <li @if( $category == 'our-services' )class="selected" @endif>
                                    <a href="javascript:void(0);"><i
                                            class="fa fa-gift"></i><span>Hizmetler</span></a>
                                    <ul>
                                        @foreach ($findServiceswithoutId5 as $service)
                                    <li><a href="{{route('service.find',$service->slug)}}">{{$service->title}}</a></li>
                                        @endforeach


                                    </ul>
                                </li>

                                <li @if( $category == 'partner-list' )class="selected" @endif >
                                    <a href="/partner-list"><i class="fa fa-copy"></i><span>Partner</span></a>
                                </li >

                                <li @if( $category == 'references' )class="selected" @endif>
                                    <a href="/references"><i class="fa fa-book"></i><span>Referanslar</span></a>
                                </li>

                                <li @if( $category == 'blog' )class="selected" @endif>
                                    <a href="/blog"><i class="fa fa-newspaper-o"></i><span>Blog
												<b class="menu-hint success">Yeni</b></span></a>
                                </li>

                                <li @if( $category == 'ihracat-radari' )class="selected" @endif><a href="javascript:void(0);"><i class="fa fa-question"></i><span>Bilgi
												Bankası</span></a>
                                    <ul>
                                        <li><a href="/ihracat-radari">İhracat Radarı</a></li>
                                        <li><a href="/devlet-tesvikleri">Devlet Teşvikleri</a></li>
                                        <li><a href="/doviz-radari">Döviz Radarı</a></li>
                                        <li><a href="/faq">S.S.S</a></li>
                                    </ul>
                                </li>

                                <li @if( $category == 'contact' )class="selected" @endif><a href="/contact"><i class="fa fa-phone"></i><span>İletişim</span></a>
                                </li>

                                <li @if( $category == 'appointment-form' )class="selected" @endif><a href="/appointment-form"><i
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
