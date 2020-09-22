@php
$posts = Helper::getAllBlogs();
$HomeUnderMenuSlider = Helper::findCustomData('HomeUnderMenuSlider');
$homePageDesc = Helper::findCustomData('homePageDesc');
$QuickServiceList = Helper::findCustomData('QuickServiceList');
$fourBox = Helper::findCustomData('fourBox');
$findServiceswithoutId = Helper::findServiceswithoutId();
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

                                <li data-index="rs-{{$key}}" data-transition="fade" data-slotamount="default"
                                data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default"
                                data-easeout="default" data-masterspeed="300" data-rotate="0"  data-saveperformance="off"
                                data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                                data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{$slide['image']}}"
                                alt="" title="slider-4"
                                width="1894" height="840"
                                data-bgposition="center center"
                                 data-kenburns="on" data-duration="10000"
                                 data-ease="Linear.easeNone" data-scalestart="100"
                                 data-scaleend="110" data-rotatestart="0" data-rotateend="0"
                                 data-blurstart="0" data-blurend="0" data-offsetstart="0 0"
                                 data-offsetend="0 0" class="rev-slidebg " data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption yellow_tx  tp-resizeme"
                                    id="slide-41-layer-13"
                                    data-x="['center','center','center','center']" data-hoffset="['0,0,0,0']"
                                    data-y="['top','top','top','top']" data-voffset="['100,100,0,-500']"
                                    data-fontsize="['70','70','32','26']"
                                    data-lineheight="['70','70','38','38']"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-color="#fdb913"
                                    data-type="text"
                                    data-responsive_offset="on"
                                    data-responsive="on"
                                    data-frames='[{"delay":320,"speed":300,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]">
                                   {{$slide['h2']}}
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption big_tx2  tp-resizeme"
                                    id="slide-41-layer-14"
                                    data-x="['center','center','center','center']" data-hoffset="['0,0,0,0']"
                                    data-y="['top','top','top','top']" data-voffset="['200,200,0,0']"
                                    data-fontsize="['70','70','40','38']"
                                    data-lineheight="['76','76','45','40']"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-color="#fff"
                                    data-type="text"
                                    data-responsive_offset="on"
                                    data-responsive="on"
                                    data-frames='[{"delay":700,"speed":300,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]">
                                    {{$slide['h1']}}
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption paragraph tp-resizeme"
                                    id="slide-41-layer-15"
                                    data-x="['center','center','center','center']" data-hoffset="['0,0,0,0']"
                                    data-y="['top','top','top','top']" data-voffset="['290,290,0,-100']"
                                    data-fontsize="['20','20','18','15']"
                                    data-lineheight="['28','28','26','23']"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-color="#ffffff"
                                    data-type="text"
                                    data-responsive_offset="on"
                                    data-responsive="on"
                                    data-frames='[{"delay":1090,"speed":300,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]">
                                    <br class="responsive"> {{$slide['h2']}}
                                </div>

                               {{-- @isset($slide->button)
                               <a class="tp-caption btn btn-primary general_btn"
                               id="slide-41-layer-16"
                               data-x="['center','center','center','center']" data-hoffset="['0,0,0,0']"
                               data-y="['top','top','top','top']" data-voffset="['340,340,0,0']"
                               data-fontsize="['16','16','14','14']"
                               data-letterspacing="['1','1','0','0']"
                               data-width="none"
                               data-height="none"
                               data-whitespace="nowrap"
                               data-type="button"
                               data-responsive_offset="on"
                               data-responsive="on"
                               data-frames='[{"delay":1480,"speed":300,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                               data-textAlign="['inherit','inherit','inherit','inherit']"
                               data-paddingtop="[20,20,12,10]"
                               data-paddingright="[40,40,18,15]"
                               data-paddingbottom="[20,20,12,10]"
                               data-paddingleft="[40,40,18,15]"  href="<?php echo base_url($slide->button_url); ?>"><?php echo $slide->button_caption; ?>
                                 </a>
                               @endisset
                                <!-- LAYER NR. 4 --> --}}


                            </li>
                            @endforeach
                        @endisset



                {{-- <li data-transition="fade" data-slotamount="7">
                    <img alt="" src="images/slider/dummy.png" data-lazyload="images/slider/slider-0/s3.jpg"
                        data-bgposition="left center" data-kenburns="on" data-duration="14000"
                        data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="130"
                        data-bgpositionend="right center">

                    <div class="caption slide-head tp-resizeme witTxt doLightBlack" data-x="center" data-y="150"
                        data-speed="500" data-start="1700" data-easing="easeOutBack">Dünya Büyük Bir Pazar
                    </div>
                    <div class="caption large-title tp-resizeme witTxt doLightBlack" data-x="center"
                        data-y="200" data-speed="700" data-start="1900" data-easing="easeOutBack">Globalleşme
                        İçin Hevesli
                        Olun!
                    </div>
                    <div class="caption larger-text tp-resizeme witTxt" data-x="center" data-y="300"
                        data-speed="700" data-start="2300" data-easing="easeOutBack"><a href="#"
                            class="btn btn-md btn-skew themeColorBtn">Detaylar</a>
                    </div>
                </li>

                <li data-transition="fade" data-slotamount="7">
                    <img alt="" src="images/slider/dummy.png" data-lazyload="images/slider/slider-0/s5.jpg"
                        data-duration="1000">
                    <div class="caption large-text tp-resizeme witTxt"
                        style="text-transform: uppercase;font-size:30px" data-x="0" data-y="400"
                        data-speed="600" data-start="1500" data-easing="Power4.easeOut" data-splitin="chars"
                        data-splitout="chars" data-elementdelay="0.05" data-endelementdelay="0.05"
                        data-endspeed="300" data-endeasing="Power1.easeOut">Hevesli Olun!</div>
                    <div class="caption large-title tp-resizeme witTxt" data-x="0" data-y="440" data-speed="600"
                        data-start="1600" data-easing="Power4.easeOut" data-splitin="chars"
                        data-splitout="chars" data-elementdelay="0.05" data-endelementdelay="0.05"
                        data-endspeed="300" data-endeasing="Power1.easeOut">Dünya Büyük Bir Pazar</div>
                    <div class="caption lft tp-resizeme" data-x="30" data-y="0" data-speed="600"
                        data-start="1600">
                        <div
                            style="background:#fff;padding:20px;line-height:40px;color:#777;text-transform:uppercase;font-size:20px;margin-top:33px">
                            Pazaryeri
                            Entegrasyonu</div>
                    </div>
                    <div class="caption lft tp-resizeme" data-x="100" data-y="0" data-speed="600"
                        data-start="1800">
                        <div
                            style="background:#b8b8b8;padding:20px;line-height:40px;color:#fff;text-transform:uppercase;font-size:20px;margin-top:121px">
                            Global
                            Pazarlama</div>
                    </div>
                    <div class="caption lft tp-resizeme" data-x="170" data-y="0" data-speed="600"
                        data-start="2000">
                        <div
                            style="background:#000;padding:35px 20px;line-height:40px;color:#fff;text-transform:uppercase;font-size:20px;margin-top:210px">
                            Online Pazar Yerleri</div>
                    </div>
                </li> --}}


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
                                    <img src='{{asset('theme/images/banners/1.jpg')}}' />
                                    <div class='banner-pattern'></div>
                                    <div class='shine'></div>
                                    <div class="bounce_in_animation">İhracat Radarı</div>
                                </a>
                            </div>
                        </div>

                        <div class="cell-3">
                            <div class='banner-card'>
                                <a href="">
                                    <img src="{{asset('theme/images/banners/2.jpg')}}" />
                                    <div class='banner-pattern'></div>
                                    <div class='shine'></div>
                                    <div class="bounce_in_animation">Devlet Teşvikleri</div>
                                </a>
                            </div>
                        </div>

                        <div class="cell-3">
                            <div class='banner-card'>
                                <a href="#">
                                    <img src="{{asset('theme/images/banners/3.jpg')}}" />
                                    <div class='banner-pattern'></div>
                                    <div class='shine'></div>
                                    <div class="bounce_in_animation">Döviz Radarı</div>
                                </a>
                            </div>
                        </div>

                        <div class="cell-3">
                            <div class='banner-card'>
                                <a href="/blog">
                                    <img src='{{asset('theme/images/banners/4.jpg')}}' />
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


                            <ul>


                                {{ substr(strip_tags($homePageDesc),0,25)}}



                            <a class="btn btn-md btn-skew themeColorBtn mb-15" href="#">
                                <span><i class="fa fa-chevron-right selected"></i>Hakkımızda Daha Fazla</span>
                            </a>
                            <a class="btn btn-md btn-skew themeColorBtn mb-15" href="#">
                                <span><i class="fa fa-chevron-right selected"></i>Şimdi Kayıt Olun!</span>
                            </a> <br>
                            <a style="display: inline-block; margin-top: 15px;"
                               class="btn btn-md btn-3d btn-mulled_wine fx animated fadeInUp mb-15" href="#"
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
                            <input type="text" id="fastBookName" name="fastBookName">
                        </div>
                    </div>
                    <div class="cell-3">
                        <div class="form-input">
                            <label for="fastBookEmail">E-Posta<span class="red"> *</span></label>
                            <input type="email" id="fastBookEmail" name="fastBookEmail">
                        </div>
                    </div>
                    <div class="cell-3">
                        <div class="form-input">
                            <label>Almak İstediğiniz Hizmet<span class="red"> *</span></label>
                            <select name="fastBookService" id="fastBookService">
                               @isset($QuickServiceList) @foreach ($QuickServiceList as $key => $item)
                            <option value="{{$key}}">{{$item['key']}}</option>
                                @endforeach @endisset
                            </select>
                        </div>
                    </div>
                    <div class="cell-3">
                        <div class="form-input">
                            <label for="fastBookDate">Tarih<span class="red"> *</span></label>
                            <input type="date" name="fastBookDate" id="fastBookDate">
                        </div>
                    </div>

                    <div class="cell-12" style="text-align: center;">
                        <a class="btn btn-md btn-skew themeColorBtn mb-15"onclick="document.getElementById('myform').submit()">
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
                            <img src="{{$service->thumbnail}}"  >
                        <h3>{{substr($service->title,0,15)}}</h3>
                            @php
                            echo substr(strip_tags($service->content),0,50);
                            @endphp
                            <a class="more-btn bold" href="our-services">Hizmet Detayları</a>
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
                        <h3 class="block-head side-heading">{{__('homepage.latest')}} <span>{{__('homepage.news')}}</span></h3>
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
                                        <a href="{{route('post.find',$post->slug)}}" class="project-name">{{$post->title}}</a>
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
                    <!-- staff item start -->
                    <div>
                        <div class="portfolio-item">
                            <div class="img-holder">
                                <div class="img-over">
                                    <a href="partner-details" class="fx link"><b class="fa fa-link"></b></a>
                                    <a href="{{asset('theme/images/portfolio/4.jpg')}}" class="fx zoom"
                                       data-gal="prettyPhoto[pp_gal"><b class="fa fa-search-plus"></b></a>
                                </div>
                                <img alt="" src="{{asset('theme/images/portfolio/4.jpg')}}">
                            </div>
                            <div class="name-holder">
                                <a href="#" class="project-name">Partner 1</a>
                            </div>
                        </div>
                    </div>
                    <!-- staff item end -->

                    <!-- staff item start -->
                    <div>
                        <div class="portfolio-item">
                            <div class="img-holder">
                                <div class="img-over">
                                    <a href="partner-details" class="fx link"><b class="fa fa-link"></b></a>
                                    <a href="{{asset('theme/images/portfolio/4.jpg')}}" class="fx zoom" data-gal="prettyPhoto[pp_gal]"
                                       title="Project Title"><b class="fa fa-search-plus"></b></a>
                                </div>
                                <img alt="" src="{{asset('theme/images/portfolio/4.jpg')}}">
                            </div>
                            <div class="name-holder">
                                <a href="#" class="project-name">Partner 2</a>
                            </div>
                        </div>
                    </div>
                    <!-- staff item end -->

                    <!-- staff item start -->
                    <div>
                        <div class="portfolio-item">
                            <div class="img-holder">
                                <div class="img-over">
                                    <a href="partner-details" class="fx link"><b class="fa fa-link"></b></a>
                                    <a href="{{asset('theme/images/portfolio/4.jpg')}}" class="fx zoom" data-gal="prettyPhoto[pp_gal]"
                                       title="Project Title"><b class="fa fa-search-plus"></b></a>
                                </div>
                                <img alt="" src="{{asset('theme/images/portfolio/4.jpg')}}">
                            </div>
                            <div class="name-holder">
                                <a href="#" class="project-name">Partner 3</a>
                            </div>
                        </div>
                    </div>
                    <!-- staff item end -->

                    <!-- staff item start -->
                    <div>
                        <div class="portfolio-item">
                            <div class="img-holder">
                                <div class="img-over">
                                    <a href="partner-details" class="fx link"><b class="fa fa-link"></b></a>
                                    <a href="{{asset('theme/images/portfolio/4.jpg')}}" class="fx zoom"
                                       data-gal="prettyPhoto[pp_gal"><b class="fa fa-search-plus"></b></a>
                                </div>
                                <img alt="" src="{{asset('theme/images/portfolio/4.jpg')}}">
                            </div>
                            <div class="name-holder">
                                <a href="#" class="project-name">Partner 1</a>
                            </div>
                        </div>
                    </div>
                    <!-- staff item end -->

                    <!-- staff item start -->
                    <div>
                        <div class="portfolio-item">
                            <div class="img-holder">
                                <div class="img-over">
                                    <a href="partner-details" class="fx link"><b class="fa fa-link"></b></a>
                                    <a href="{{asset('theme/images/portfolio/4.jpg')}}" class="fx zoom"
                                       data-gal="prettyPhoto[pp_gal"><b class="fa fa-search-plus"></b></a>
                                </div>
                                <img alt="" src="{{asset('theme/images/portfolio/4.jpg')}}">
                            </div>
                            <div class="name-holder">
                                <a href="#" class="project-name">Partner 1</a>
                            </div>
                        </div>
                    </div>
                    <!-- staff item end -->

                    <!-- staff item start -->
                    <div>
                        <div class="portfolio-item">
                            <div class="img-holder">
                                <div class="img-over">
                                    <a href="partner-details" class="fx link"><b class="fa fa-link"></b></a>
                                    <a href="{{asset('theme/images/portfolio/4.jpg')}}" class="fx zoom"
                                       data-gal="prettyPhoto[pp_gal"><b class="fa fa-search-plus"></b></a>
                                </div>
                                <img alt="" src="{{asset('theme/images/portfolio/4.jpg')}}">
                            </div>
                            <div class="name-holder">
                                <a href="#" class="project-name">Partner 1</a>
                            </div>
                        </div>
                    </div>
                    <!-- staff item end -->
                </div>

                <div class="clearfix"></div>

                <div class="view-all-projects"><a class="btn main-bg btn-3d btn-lg" href="/partner-list">{{__('homepage.all_partners')}}</a></div>
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
                            <h3 class="skew-25"><a href="#"><span class="skew25">{{$faq['question']}}</span></a></h3>
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
                            <form class="form-signin cform" method="post" action="{{route('contact.form')}}" id="cform" autocomplete="on">
                                @csrf
                                <div class="form-input">
                                    <label>{{__('contact.name')}}<span class="red">*</span></label>
                                    <input type="text" required>
                                </div>
                                <div class="form-input">
                                    <label>{{__('contact.email')}}<span class="red">*</span></label>
                                    <input type="text" required>
                                </div>
                                <div class="form-input">
                                    <label>{{__('contact.subject')}}<span class="red">*</span></label>
                                    <input type="text" required>
                                </div>
                                <div class="form-input">
                                    <label>{{__('contact.message')}}<span class="red">*</span></label>
                                    <textarea required></textarea>
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

