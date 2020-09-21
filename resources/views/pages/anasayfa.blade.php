@php
$posts = Helper::getAllBlogs();
$HomeUnderMenuSlider = Helper::findCustomData('HomeUnderMenuSlider');
dd();
@endphp
    <!-- Header End -->


    <!-- Content Start -->
    <div id="contentWrapper">

        <!-- Revolution slider start -->
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>

                    @isset ($HomeUnderMenuSlider->JsonData)
                    @php

                        $data =  json_decode($HomeUnderMenuSlider->JsonData, true);
                    @endphp

                    @foreach ($data['HomeUnderMenuSlider'] as  $value)


                        <li data-transition="fade" data-slotamount="7">
                            <img alt="" src="{{$value['image']}}" data-lazyload="{{$value['image']}}"
                                 data-bgposition="left center" data-kenburns="on" data-duration="14000"
                                 data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="130"
                                 data-bgpositionend="right center">

                            <div class="caption fade " data-autoplay="true" data-autoplayonlyfirsttime="true"
                                 data-nextslideatend="false" data-x="470" data-y="center" data-speed="500"
                                 data-start="10" data-easing="easeOutBack">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/OO32GImSLVo"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                            <div class="caption slide-head tp-resizeme witTxt doItWhite" data-x="0" data-y="center"
                                 data-speed="500" data-start="1700" data-easing="easeOutBack" width="300">
                                 {{$value['h1']}}
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
                            <h3 class="center block-head"><span class="main-color">E-İhracat Türkiye'ye </span>Hoş
                                Geldiniz!
                            </h3>
                            <p class="margin-bottom-0">
                                Türkiye'nin E-İhracat Platformu, küresel ticaretin sınırlarını kaldırmak üzere 2018
                                yılında
                                İstanbul merkezli
                                olarak kuruldu.Alanında uzman deneyimli yönetim kadrosu ile Türkiye'de onlarca marka
                                ve
                                üreticilere E-İhracat
                                hakkında çeşitli destekler sağlamaktadır.
                            </p>
                            <p>
                                Sektörün ihtiyaçlarını yakından takip ederek, genç ve dinamik ekibimizle beraber
                                çözümler
                                üretmek için varız.
                            </p>
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
                                <option value="fastBookService1">Hukuk & Lojistik</option>
                                <option value="fastBookService2">Ulusal Pazaryerleri</option>
                                <option value="fastBookService3">Uluslararası Pazaryerleri </option>
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
                        <a class="btn btn-md btn-skew themeColorBtn mb-15" href="#">
                            <span><i class="fa fa-calendar selected"></i>Randevu Al</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services boxes style 1 start -->
        <div class="gry-bg">
            <div class="container">
                <div class="row">
                    <div class="cell-3 service-box-1 fx" data-animate="fadeInUp" data-animation-delay="200">
                        <div class="box-top">
                            <img src="{{asset('theme/images/icons/1.png')}}"  >
                            <h3>Pazar Yeri Entegrasonu</h3>
                            <p>Proin gravida nibh vel velit auctor enean sollicitud lorem quis bibendum auctor, nisi
                                elit consequipsum.Proin gravida nibh vel velit auctor enean sollicitud lorem quis
                                bibendum auctor, nisi elit consequipsum.</p>
                            <a class="more-btn bold" href="our-services">Hizmet Detayları</a>
                        </div>
                    </div>
                    <div class="cell-3 service-box-1 fx" data-animate="fadeInUp" data-animation-delay="400">
                        <div class="box-top">
                            <img src="{{asset('theme/images/icons/2.png')}}" alt="">
                            <h3>Global Pazarlama</h3>
                            <p>Tüm dünya da bulunan potansiyel müşterilerinize ulaşmak için mağazanızın kapısını tüm
                                dünyaya açın!</p>
                            <a class="more-btn bold" href="our-services">Hizmet Detayları</a>
                        </div>
                    </div>
                    <div class="cell-3 service-box-1 fx" data-animate="fadeInUp" data-animation-delay="600">
                        <div class="box-top">
                            <img src="{{asset('theme/images/icons/3.png')}}" alt="">
                            <h3>Online Pazaryerleri</h3>
                            <p>Dünyanın dört bir yanındaki pazar yerlerine hemen nasıl satış yapacağınız öğren!</p>
                            <a class="more-btn bold" href="our-services">Hizmet Detayları</a>
                        </div>
                    </div>
                    <div class="cell-3 service-box-1 fx" data-animate="fadeInUp" data-animation-delay="800">
                        <div class="box-top">
                            <img src="{{asset('theme/images/icons/4.png')}}" alt="">
                            <h3>Hukuk & Lojistik Faaliyetleri</h3>
                            <p>Proin gravida nibh vel velit auctor enean sollicitud lorem quis bibendum auctor, nisi
                                elit consequipsum.Proin gravida nibh vel velit auctor enean sollicitud lorem quis
                                bibendum auctor, nisi elit consequipsum.</p>
                            <a class="more-btn bold" href="our-services">Hizmet Detayları</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services boxes style 1 start -->

        <!-- Portfolio start -->
        <div id="newsSection" class="sectionWrapper">
            <div class="container">
                <div class="row">
                    <div class="cell-3">
                        <h3 class="block-head side-heading">Son <span>Haberler</span></h3>
                        <p class="portfolio-lft-txt">
                            Türkiye'de ve Dünya'daki tüm yenilikleri haberlerimiz arasından takip edebilirsiniz. Son
                            eklenen haberleri bu alanda görüntüleyebilir, tüm haberlere için aşağıdaki linkten
                            ulaşabilirsiniz.
                        </p>
                        <div class="viewAll-home">
                            <a class="btn themeColorBtn mb-15" href="blog">Tüm Haberlere Göz
                                Atın</a>
                        </div>
                    </div>
                    <div class="cell-9">
                        <div class="homeGallery portfolio">
                            @forelse($posts as $post)
                                <div>
                                <div class="portfolio-item">
                                    <div class="img-holder">
                                        <div class="img-over">
                                            <a href="blog-single/{{$post->slug}}" class="fx link"><b
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
                <h3 class="center block-head"><span class="main-color">E-İhracat İş Ortakları</span>
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

                <div class="view-all-projects"><a class="btn main-bg btn-3d btn-lg" href="/partner-list">Tüm
                        Partnerler</a></div>
            </div>
        </div>

        <!-- FUN Staff start -->
        <div class="fun-staff staff-1 block-bg-2 sectionWrapper">
            <div class="container">
                <!-- staff item start -->
                <div class="cell-2 fx" data-animate="fadeInDown" data-animation-delay="200">
                    <div class="fun-number">1.000+</div>
                    <div class="fun-text main-bg">Toplam Üye</div>
                    <div class="fun-icon"><i class="fa fa-leaf"></i></div>
                </div>
                <!-- staff item end -->

                <!-- staff item start -->
                <div class="cell-2 fx" data-animate="fadeInDown" data-animation-delay="400">
                    <div class="fun-number">500+</div>
                    <div class="fun-text main-bg">Toplam İmalatçı</div>
                    <div class="fun-icon"><i class="fa fa-clock-o"></i></div>
                </div>
                <!-- staff item end -->

                <!-- staff item start -->
                <div class="cell-4 fx" data-animate="fadeInDown">
                    <div class="fun-title bold">Hedefimiz <span>Türkiye'de ki kobileri ve büyük üreticileri
								e-ihracatın faydaları ve
								fırsatlarından yararlandırmaktır. </span></div>
                </div>
                <div class="cell-2 fx" data-animate="fadeInDown" data-animation-delay="600">
                    <div class="fun-number">50.000+</div>
                    <div class="fun-text main-bg">İstihdam</div>
                    <div class="fun-icon"><i class="fa fa-group"></i></div>
                </div>
                <!-- staff item end -->

                <!-- staff item start -->
                <div class="cell-2 fx" data-animate="fadeInDown" data-animation-delay="800">
                    <div class="fun-number">$40 M. +</div>
                    <div class="fun-text main-bg">E-İhracat Hacmi</div>
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
                            <li>
                                <h3 class="skew-25"><a href="#"><span class="skew25">Hangi şirketler eihracat için
												uygundur?
											</span></a></h3>
                                <div class="accordion-panel active">
                                    Fiziksel anlamda elle tutulabilir ürün imal eden hemen hemen her şirket/kobi
                                    için e-ihracat mümkündür.
                                </div>
                            </li>
                            <li>
                                <h3 class="skew-25"><a href="#"><span class="skew25">Şirketlerin e-ihracat yaparken
												dikkat etmesi gereken
												hususlar nelerdir?</span></a></h3>
                                <div class="accordion-panel">
                                    E-ihracat yapmak isteyen şirketlerin öncelikle dikkat etmesi gereken husus doğru
                                    bir yol haritasıdır. Bu yol
                                    haritası reklam politikaları, hesap yönetimi gibi
                                    konularda doğru bilgi birikimine ve tecrübeye sahip olarak veya bu bilgi
                                    birikimine ve tecrübeye sahip olan
                                    insanlar ile birlikte olarak e-ihracata girişmesidir.
                                </div>
                            </li>
                            <li>
                                <h3 class="skew-25"><a href="#"><span class="skew25">Hangi şirketler ve hangi
												ürünler E-Ticaret Platformlarında
												daha şanslı?</span></a></h3>
                                <div class="accordion-panel">
                                    E-ticaret platformlarında binlerce çeşit ürünün satılmasının yanı sıra cep
                                    telefonundan mutfak araç
                                    gereçlerine, perdeden kupaya kısacası bir insanın evinde
                                    bulundurabileceği ürünler diğer ürünlere nazaran daha avantajlı konumdadır.
                                </div>
                            </li>
                            <li>
                                <h3 class="skew-25"><a href="#"><span class="skew25">Mağazayı oluşturmak ve yönetmek
												süreçleri nasıl
												işler?</span></a></h3>
                                <div class="accordion-panel">
                                    Mağaza oluşturmak her ne kadar kolay gibi gözükse de Birleşmiş Milleter'de
                                    şirket açmak, banka hesabı
                                    oluşturmak, vergi ve teşvikleri takip etmek gibi detayları
                                    içerisinde barındırmaktadır. Bu noktada E-İhracat Türkiye olarak hiçbir
                                    ayrıntıyı atlamadan üreticilerimize
                                    destek olmaktayız.
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="cell-6 fx" data-animate="fadeInRight">
                        <h3 class="block-head">Bizimle İletişime Geçin</h3>
                        <p>
                            Eğer sorunuza cevap bulamadıysanız ya da farklı bir konuda yardıma ihtiyacınız varsa
                            bizimle iletişime geçebilirsiniz.
                        </p>
                        <div class="contact-form">
                            <form action="#" id="hire_form">
                                <div class="form-input">
                                    <label>Ad Soyad<span class="red">*</span></label>
                                    <input type="text" required>
                                </div>
                                <div class="form-input">
                                    <label>E-Posta<span class="red">*</span></label>
                                    <input type="text" required>
                                </div>
                                <div class="form-input">
                                    <label>Konu<span class="red">*</span></label>
                                    <input type="text" required>
                                </div>
                                <div class="form-input">
                                    <label>Mesajınız<span class="red">*</span></label>
                                    <textarea required></textarea>
                                </div>
                                <div>
                                    <input type="submit" class="btn btn-large main-bg" value="Gönder">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Content End -->

