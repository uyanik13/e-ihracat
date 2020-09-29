@php
    $findServiceswithoutId = Helper::findServiceswithoutId();
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
                            <li><span><i class="fa fa-phone"></i>{{__('lang.call_us')}}@isset($setting['phone']) {{ $setting['phone']->value }} @endisset</span></li>
                        </ul>
                    </div>
                    <div class="cell-7 right-bar">
                        <ul class="right">
                            <li><a href="javascript:void(0);"><i class="fa fa-clock-o"></i>
                                {{__('lang.our_works_hours')}}
                                </a></li>
                            <li><a href="/panel/register"><i class="fa fa-user"></i>{{__('lang.site_register')}}</a></li>
                            <li><a href="/panel/login" class=""><i class="fa fa-unlock-alt"></i>{{__('lang.site_login')}} </a></li>
                            <li><a href="#" class="multiLanguage"><i class="fa fa-globe"></i>{{__('lang.multi_lang_btn')}}</a></li>
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
                                    <a href="/"><i class="fa fa-home"></i><span>{{__('lang.nav_homepage')}}</span></a>
                                </li>

                                <li @if( $category == 'about-us' )class="selected" @endif>
                                    <a href="/about-us"><i
                                            class="fa fa-building-o"></i><span>{{__('lang.nav_about')}}</span></a>
                                </li >

                                <li @if( $category == 'our-services' )class="selected" @endif>
                                    <a href="javascript:void(0);"><i
                                            class="fa fa-gift"></i><span>{{__('lang.nav_services')}}</span></a>
                                    <ul>
                                        @isset($findServiceswithoutId)
                                        @foreach ($findServiceswithoutId as $service)
                                    <li><a href="{{route('service.find',$service->slug)}}">{{$service->title}}</a></li>
                                        @endforeach
                                        @endisset

                                    </ul>
                                </li>

                                <li @if( $category == 'partner-list' )class="selected" @endif >
                                    <a href="/partner-list"><i class="fa fa-copy"></i><span>{{__('lang.nav_partner')}}</span></a>
                                </li >

                                <li @if( $category == 'references' )class="selected" @endif>
                                    <a href="/references"><i class="fa fa-book"></i><span>{{__('lang.nav_referances')}}</span></a>
                                </li>

                                <li @if( $category == 'blog' )class="selected" @endif>
                                    <a href="/blog"><i class="fa fa-newspaper-o"></i><span>{{__('lang.nav_blog')}}
												<b class="menu-hint success">{{__('lang.nav_blog_new')}}</b></span></a>
                                </li>

                                <li @if( $category == 'ihracat-radari' )class="selected" @endif><a href="javascript:void(0);"><i class="fa fa-question"></i><span>{{__('lang.nav_info_bank')}}</span></a>
                                    <ul>
                                        <li><a href="/ihracat-radari">{{__('lang.nav_export_radar')}}</a></li>
                                        <li><a href="/devlet-tesvikleri">{{__('lang.nav_government_helps')}}</a></li>
                                        <li><a href="/doviz-radari">{{__('lang.nav_foreign_money')}}</a></li>
                                        <li><a href="/faq">{{__('lang.nav_faq')}}</a></li>
                                    </ul>
                                </li>

                                <li @if( $category == 'contact' )class="selected" @endif><a href="/contact"><i class="fa fa-phone"></i><span>{{__('lang.nav_contact')}}</span></a>
                                </li>

                                <li @if( $category == 'appointment-form' )class="selected" @endif><a href="/appointment-form"><i
                                            class="fa fa-calendar-check-o"></i><span>{{__('lang.nav_appointment')}}</span></a>
                                </li>
                            </ul>
                        </nav>
                        <!-- top navigation menu end -->

                        <!-- top search start -->
                        <div class="top-search">
                            <a href="#"><span class="fa fa-search"></span></a>
                            <div class="search-box">
                                <div class="input-box left">
                                    <input type="text" name="t" onkeyup="searchHeader()" id="t-search" class="txt-box"
                                           placeHolder="Anahtar kelime girin..." />
                                </div>
                                <div class="left">
                                    <input type="submit" id="b-search" class="btn main-bg" value="Ara" />
                                </div>

                            </div>

                        </div>

                        <script>
                            function searchHeader () {
                                const element = document.getElementById('t-search-result')

                                if (document.getElementById('t-search').value == '') {
                                    element.style.display = 'none'
                                } else {
                                    element.style.display = 'block'
                                    element.innerHTML = ''
                                    element.innerText = 'Loading...'
                                    $.ajax({
                                        url: '/search/header-search',
                                        method: 'get',
                                        data: {'search_text': document.getElementById('t-search').value},
                                        success (resp) {
                                            var element = document.getElementById('t-search-result')
                                            element.innerHTML = '';
                                            if (resp.data.length < 1) {
                                                var new_result = '<li ><h5 class="text-danger text-center search_result_a" style="height: 35px" >Partner not found</h5></li>'
                                                element.innerHTML += new_result
                                            }
                                            console.log(resp.data[0])
                                            for (let i = 0; i < resp.data.length; i++) {
                                                var new_result = `<a class="search_result_a" href="/blog-single/${  resp.data[i].slug  }"><li class="search_result_li"  > <img style="height: 35px" src=${  resp.data[i].thumbnail  } >${  resp.data[i].title.substring(0, 18)  }...</li></a><hr>`
                                                element.innerHTML += new_result
                                            }
                                            console.log(element)
                                        }
                                    })
                                }
                            }
                        </script>
                        <!-- top search end -->
                    </div>
                </div>
            </div>
        </header>
        <div  id="t-search-result">

        </div>
        <!-- Logo, Global navigation menu and search end -->

    </div>
