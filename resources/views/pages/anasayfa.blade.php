@php
    $posts = Helper::getAllBlogs();
    $HomeUnderMenuSlider = Helper::findCustomData('HomeUnderMenuSlider');
    $about = Helper::findCustomData('about');
    $QuickServiceList = Helper::findCustomData('QuickServiceList');
    $fourBox = Helper::findCustomData('fourBox');
    $findServiceswithoutId = Helper::findServiceswithoutId();
    $randomPartners = Helper::randomPartners();
    $faqs = Helper::findCustomData('Faq');
@endphp
<!-- Header End -->


<!-- Content Start -->
<div id="contentWrapper">

    <!-- Revolution slider start -->
    <div class="tp-banner-container">
        <div class="tp-banner">

            <ul>
                @isset($HomeUnderMenuSlider)
                    @foreach ($HomeUnderMenuSlider  as $key => $slide)
                        <li data-transition="fade" data-slotamount="7">
                            <img alt=""  data-lazyload="{{$slide['image']}}"
                                 data-bgposition="left center" data-kenburns="on" data-duration="14000"
                                 data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="130"
                                 data-bgpositionend="right center">
                            <div class="caption fade " data-autoplay="true" data-autoplayonlyfirsttime="true"
                                 data-nextslideatend="false" data-x="470" data-y="center" data-speed="500"
                                 data-start="10" data-easing="easeOutBack">
                                @isset($slide['video']) <iframe width="560" height="315" src="{{$slide['video']}}"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>@endisset
                            </div>
                            @isset($slide['h1'])<div class="caption slide-head tp-resizeme witTxt doLightBlack" data-x="center" data-y="150"
                                 data-speed="500" data-start="1700" data-easing="easeOutBack">{{$slide['h1']}}@endisset
                            </div>
                            @isset($slide['h2'])<div class="caption large-title tp-resizeme witTxt doLightBlack" data-x="center"
                                 data-y="200" data-speed="700" data-start="1900" data-easing="easeOutBack">{{$slide['h2']}}@endisset
                            </div>
                            @isset($slide['url'])<div class="caption larger-text tp-resizeme witTxt" data-x="center" data-y="300"
                                 data-speed="700" data-start="2300" data-easing="easeOutBack"><a href="{{$slide['url']}}"
                                                                                                 class="btn btn-md btn-skew themeColorBtn">Detaylar</a>@endisset
                            </div>
                        </li>

                    @endforeach
                @endisset


            </ul>

        </div>
    </div>
    <!-- Revolution slider end -->

    <div class="sectionWrapper img-pattern">
        <div class="container">
            <div id="bannerArea">
                <div class="row fx" data-animate="fadeIn">
                    <div class="cell-3">
                        <div class='banner-card'>
                            <a href="/export-radar">
                                <img src='{{asset('theme/images/banners/1.jpg')}}'/>
                                <div class='banner-pattern'></div>
                                <div class='shine'></div>
                                <div class="bounce_in_animation">İhracat Radarı</div>
                            </a>
                        </div>
                    </div>

                    <div class="cell-3">
                        <div class='banner-card'>
                            <a href="">
                                <img src="{{asset('theme/images/banners/2.jpg')}}"/>
                                <div class='banner-pattern'></div>
                                <div class='shine'></div>
                                <div class="bounce_in_animation">Devlet Teşvikleri</div>
                            </a>
                        </div>
                    </div>

                    <div class="cell-3">
                        <div class='banner-card'>
                            <a href="#">
                                <img src="{{asset('theme/images/banners/3.jpg')}}"/>
                                <div class='banner-pattern'></div>
                                <div class='shine'></div>
                                <div class="bounce_in_animation">Döviz Radarı</div>
                            </a>
                        </div>
                    </div>

                    <div class="cell-3">
                        <div class='banner-card'>
                            <a href="/blog">
                                <img src='{{asset('theme/images/banners/4.jpg')}}'/>
                                <div class='banner-pattern'></div>
                                <div class='shine'></div>
                                <div class="bounce_in_animation">Haberler</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="cell-8">
                <div class="row">
                    <div class="block fx aboutTextArea margin-top-50" data-animate="fadeInLeft">
                        <h3 class="center block-head"><span class="main-color">E-İhracat Türkiye'ye Hoş Geldiniz!
                        </h3>

                        <p class="margin-bottom-0">
                            {{ substr(strip_tags($about['homePageDesc']),0,25)}}

                        </p>

                        <a class="btn btn-md btn-skew themeColorBtn mb-15" href="#">
                            <span><i class="fa fa-chevron-right selected"></i>Hakkımızda Daha Fazla</span>
                        </a>
                        <a class="btn btn-md btn-skew themeColorBtn mb-15" href="#">
                            <span><i class="fa fa-chevron-right selected"></i>Şimdi Kayıt Olun!</span>
                        </a> <br>
                        <a style="display: inline-block; margin-top: 15px;"
                           class="btn btn-md btn-3d btn-mulled_wine fx animated fadeInUp mb-15" href="{{$about['url']}}"
                           data-animate="fadeInUp" data-animation-delay="700" style="animation-delay: 700ms;">
                            <span>Hizmet Kataloğumuzu İndirin <i class="fa fa-file-pdf-o"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="cell-4 fx" data-animate="bounceIn">
                <img alt="" src="{{asset('theme/images/home/hakkimizda-sag.png')}}">
            </div>

        </div>
    </div>

    <section class="fastBooking" style="
				background: url(theme/images/appointmentformbg.jpg) center right no-repeat;
    			background-color: #ffffffb8;
				background-blend-mode: overlay;
				background-size: cover;">
        <form method="post" action="{{route('contact.form')}}" id="myform">
            @csrf
            <div class="container">
                <h3 class="center block-head">
						<span class="main-color">
							Hızlı Randevu
						</span>
                </h3>
                <div class="row">
                    <div class="cell-3">
                        <div class="form-input">
                            <label for="fastBookName">Ad Soyad<span class="red"> *</span></label>
                            <input type="text" id="fastBookName" name="name">
                        </div>
                    </div>
                    <div class="cell-3">
                        <div class="form-input">
                            <label for="fastBookEmail">E-Posta<span class="red"> *</span></label>
                            <input type="email" id="fastBookEmail" name="email">
                        </div>
                    </div>
                    <div class="cell-3">
                        <div class="form-input">
                            <label>Almak İstediğiniz Hizmet<span class="red"> *</span></label>
                            <select name="service" id="fastBookService">
                                @isset($QuickServiceList) @foreach ($QuickServiceList as $key => $item)
                                    <option value="{{$key}}">{{$item['key']}}</option>
                                @endforeach @endisset
                            </select>
                        </div>
                    </div>
                    <div class="cell-3">
                        <div class="form-input">
                            <label for="fastBookDate">Tarih<span class="red"> *</span></label>
                            <input type="date" name="date" id="fastBookDate">
                        </div>
                    </div>

                    <div class="cell-12" style="text-align: center;">
                        <a class="btn btn-md btn-skew themeColorBtn mb-15"
                           onclick="document.getElementById('myform').submit()">
                            <span><i class="fa fa-calendar selected"></i>Randevu Al</span>
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <!-- Services boxes style 1 start -->
    <div class="gry-bg">
        <div class="container">
            <div class="row">

                @foreach ($findServiceswithoutId as $service)
                    <div class="cell-3 service-box-1 fx" data-animate="fadeInUp" data-animation-delay="200">
                        <div class="box-top">
                            <img src="{{$service->thumbnail}}">
                            <h3>{{substr($service->title,0,15)}}</h3>
                            @php
                                echo substr(strip_tags($service->content),0,50);
                            @endphp
                            <a class="more-btn bold" href="{{route('service.find',$service->slug)}}">Hizmet
                                Detayları</a>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- Services boxes style 1 start -->

    <!-- Portfolio start -->
    <div id="newsSection" class="sectionWrapper">
        <div class="container">
            <div class="row">
                <div class="cell-3">
                    <h3 class="block-head side-heading">{{__('homepage.latest')}} <span>{{__('homepage.news')}}</span>
                    </h3>
                    <p class="portfolio-lft-txt">
                        {{__('homepage.look_all_news_desc')}}
                    </p>
                    <div class="viewAll-home">
                        <a class="btn themeColorBtn mb-15" href="blog">{{__('homepage.look_all_news')}}</a>
                    </div>
                </div>
                <div class="cell-9">
                    <div class="homeGallery portfolio">
                        @forelse($posts as $post)
                            <div>
                                <div class="portfolio-item">
                                    <div class="img-holder">
                                        <div class="img-over">
                                            <a href="{{route('post.find',$post->slug)}}" class="fx link"><b
                                                    class="fa fa-link"></b></a>
                                        </div>
                                        <img alt="" src="{{$post->thumbnail}}">
                                    </div>
                                    <div class="name-holder">
                                        <a href="{{route('post.find',$post->slug)}}"
                                           class="project-name">{{$post->title}}</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse

                    </div><!-- .portfolioGallery end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio end -->

    <!-- Portfolio Staff -->
    <div class="sectionWrapper gry-bg">
        <div class="container">
            <h3 class="center block-head"><span class="main-color">{{__('homepage.partners')}}</span>
            </h3>

            <div class="portfolioGallery portfolio">
                @isset($randomPartners)
                    @foreach($randomPartners as $partner)
                        <div>
                            <div class="portfolio-item">
                                <div class="img-holder">
                                    <div class="img-over">
                                        <a href="{{route('partner.find',$partner->id)}}" class="fx link"><b
                                                class="fa fa-link"></b></a>
                                        <a href="{{$partner->avatar}}" class="fx zoom"
                                           data-gal="prettyPhoto[pp_gal"><b class="fa fa-search-plus"></b></a>
                                    </div>
                                    <img alt="" src="{{$partner->avatar}}">
                                </div>
                                <div class="name-holder">
                                    <a href="{{route('partner.find',$partner->id)}}"
                                       class="project-name">{{$partner->name}}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endisset
            </div>

            <div class="clearfix"></div>

            <div class="view-all-projects"><a class="btn main-bg btn-3d btn-lg"
                                              href="/partner-list">{{__('homepage.all_partners')}}</a></div>
        </div>
    </div>

    <!-- FUN Staff start -->
    <div class="fun-staff staff-1 block-bg-2 sectionWrapper">
        <div class="container">
            <!-- staff item start -->
            <div class="cell-2 fx" data-animate="fadeInDown" data-animation-delay="200">
                <div class="fun-number">@isset($fourBox['allusers']){{$fourBox['allusers']}}+ @endisset</div>
                <div class="fun-text main-bg">{{__('homepage.total_members')}}</div>
                <div class="fun-icon"><i class="fa fa-leaf"></i></div>
            </div>
            <!-- staff item end -->

            <!-- staff item start -->
            <div class="cell-2 fx" data-animate="fadeInDown" data-animation-delay="400">
                <div class="fun-number">@isset($fourBox['allusers']){{$fourBox['providers']}}+ @endisset</div>
                <div class="fun-text main-bg">{{__('homepage.total_providers')}}</div>
                <div class="fun-icon"><i class="fa fa-clock-o"></i></div>
            </div>
            <!-- staff item end -->

            <!-- staff item start -->
            <div class="cell-4 fx" data-animate="fadeInDown">
                <div class="fun-title bold"><span>{{__('homepage.our_mission')}} </span></div>
            </div>
            <div class="cell-2 fx" data-animate="fadeInDown" data-animation-delay="600">
                <div class="fun-number">@isset($fourBox['allusers']){{$fourBox['employments']}}+ @endisset</div>
                <div class="fun-text main-bg">{{__('homepage.employments')}}</div>
                <div class="fun-icon"><i class="fa fa-group"></i></div>
            </div>
            <!-- staff item end -->

            <!-- staff item start -->
            <div class="cell-2 fx" data-animate="fadeInDown" data-animation-delay="800">
                <div class="fun-number">@isset($fourBox['allusers']) {{$fourBox['exportvolume']}} + @endisset</div>
                <div class="fun-text main-bg">{{__('homepage.e_export_volume')}}</div>
                <div class="fun-icon"><i class="fa fa-bell"></i></div>
            </div>
            <!-- staff item end -->

        </div><!-- .container end -->
    </div>
    <!-- FUN Staff end -->

    <div class="sectionWrapper img-pattern">
        <div class="container">
            <div class="row">
                <div class="cell-6 fx" data-animate="fadeInLeft">
                    <h3 class="block-head">Sıkça Sorulan Sorular</h3>
                    <ul id="accordion" class="accordion">


                        @isset($faqs)
                            @foreach($faqs as $key => $faq)
                                <li>
                                    <h3 class="skew-25"><a href="#"><span class="skew25">{{$faq['question']}}</span></a>
                                    </h3>
                                    <div class="accordion-panel active">{{$faq['answer']}}
                                    </div>
                                </li>
                            @endforeach
                        @endisset


                    </ul>
                </div>
                <div class="cell-6 fx" data-animate="fadeInRight">
                    <h3 class="block-head">{{__('contact.get_contact_us')}}</h3>
                    <p>
                        {{__('contact.if_you_have_a_any_question')}}
                    </p>
                    <div class="contact-form">
                        <form class="form-signin cform" method="post" action="{{route('contact.form')}}" id="cform"
                              autocomplete="on">
                            @csrf
                            <div class="form-input">
                                <label>{{__('contact.name')}}<span class="red">*</span></label>
                                <input type="text" name="name" required>
                            </div>
                            <div class="form-input">
                                <label>{{__('contact.email')}}<span class="red">*</span></label>
                                <input type="text" name="email" required>
                            </div>
                            <div class="form-input">
                                <label>{{__('contact.subject')}}<span class="red">*</span></label>
                                <input type="text" name="subject" required>
                            </div>
                            <div class="form-input">
                                <label>{{__('contact.message')}}<span class="red">*</span></label>
                                <textarea name="message" required></textarea>
                            </div>
                            <div>
                                <input type="submit" class="btn btn-large main-bg" value="{{__('contact.send')}}">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Content End -->

