<!--Footer Top Social start-->
@php
    $recentPosts = Helper::recentPosts(3);
@endphp
<div class="footer-bar footer-bar-3">
    <div class="container">
        <div class="row">
            <div class="cell-10">
                <p><strong class="main-color">E-İHRACAT TÜRKİYE </strong>- <a href="http://eihracatturkiye.com"
                                                                              class="main-bg"><span
                            data-view="Globalleşmeye">Dijitalleşmeye</span></a> hazır olun.
                </p>
            </div>
            <div class="cell-2 buyNow">
                <a class="btn btn-large main-bg" href="http://eihracatturkiye.com">Partner
                    Olun!</a>
            </div>
        </div>
    </div>
</div>
<!--Footer Top Social end -->

<!-- Footer start -->
<footer id="footWrapper">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <!-- footer cell 1 start -->
                <div class="cell-3">
                    <div class="foot-logo"><img src="{{asset('theme/images/logo-white.png')}}" alt=""></div>
                    <p>Türkiye’nin sürdürülebilir ekonomik kalkınmasını desteklemek bizim en büyük
                        motivasyonumuz. Dünyaya açılmanın
                        şimdi tam zamanı! Bünyemizdeki güçlü çözüm ortaklarımız ile ihtiyacınız olan hizmetlere
                        ulaşın. </p>
                    <ul class="social-list hover_links_effect">
                        <li>@isset($setting['facebook']->value)<a target="_blank" href="{{$setting['facebook']->value}}"><span
                                    class="fa fa-facebook"></span></a>
                            @endisset
                        </li>
                        <li>@isset($setting['instagram']->value)<a target="_blank" href="{{$setting['instagram']->value}}"><span
                                    class="fa fa-instagram"></span></a>
                            @endisset
                        </li>
                        <li>@isset($setting['linkedin']->value)<a target="_blank" href="{{$setting['linkedin']->value}}"><span
                                    class="fa fa-linkedin"></span></a>
                            @endisset
                        </li>
                        <li>
                            @isset($setting['youtube']->value)<a target="_blank"
                               href="{{$setting['youtube']->value}}"><span
                                    class="fa fa-youtube"></span></a> @endisset
                        </li>
                    </ul>
                </div>
                <!-- footer cell 1 start -->


                <!-- main menu footer cell start -->
                <div class="cell-3">
                    <h3 class="block-head">Linkler</h3>
                    <ul class="footer-menu">
                        <li><a href="/index">Anasayfa</a></li>
                        <li><a href="our-services">Hizmetler</a></li>
                        <li><a href="partner-list">Partnerler</a></li>
                        <li><a href="appointment-form">Randevu</a></li>
                    </ul>
                </div>
                <!-- main menu footer cell start -->


                <!-- Recent  Post  footer cell start -->
                <div class="cell-3">
                    <h3 class="block-head">Son Gönderiler </h3>
                    <div class="recent-posts-footer">
                        <ul>
                            @forelse($recentPosts as $recent)
                                <li>
                                    <div class="post-img">
                                        <a href="{{route('post.find',$recent->slug)}}">
                                            <img src="{{$recent->thumnail}}" alt="">
                                        </a>
                                    </div>
                                    <div class="widget-post-info">
                                        <h4>
                                            <a href="{{route('post.find',$recent->slug)}}">
                                                {{$recent->title}}
                                            </a>
                                        </h4>
                                        <div class="meta">
                                            <a href="{{route('post.find',$recent->slug)}}">
                                                <span><i class="fa fa-clock-o"></i>{{Helper::getDateForHuman($recent->id)}}</span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                </div>
                <!-- Recent  Post footer cell start -->


                <!-- contact us footer cell start -->
                <div class="cell-3">
                    <h3 class="block-head">İletişim Bilgileri</h3>
                    <ul>
                        <li class="footer-contact">
                            @isset($setting['address']->value)
                                <i class="fa fa-home"></i><span>
                                    {{$setting['address']->value}}
                                </span>
                             @endisset
                        </li>
                        <li class="footer-contact">
                        @isset($setting['email']->value)
                            <i class="fa fa-globe"></i><span><a
                                    href="mailto:{{$setting['email']->value}}">{{$setting['email']->value}}</a></span>
                        @endisset
                        </li>
                        <li class="footer-contact">
                            @isset($setting['phone']->value)
                                <i class="fa fa-phone"></i><span>{{$setting['phone']->value}}</span>
                            @endisset
                        </li>
                        <li class="footer-contact">
                            <i class="fa fa-map-marker"></i><span><a
                                    href="contact/#map_canvas">Haritada Bizi Görüntüleyin</a></span>
                        </li>
                        <li class="footer-contact newsletterArea">
									<span style="text-align: text-center">
										<h5>Bültene Abone Olun </h5>
										<input class="newsletterInput" type="email" placeholder="E-Posta Adresiniz">
										<a style="display: block; margin-top: 15px; animation-delay: 700ms;"
                                           class="btn btn-md btn-3d main-bg fx animated fadeInUp mb-15" href="#"
                                           data-animate="fadeInUp" data-animation-delay="700">
											<span style="display: block; text-align: center;">Gönder</span>
										</a>
									</span>
                        </li>
                    </ul>
                </div>
                <!-- contact us footer cell end -->
            </div>
        </div>
    </div>

    <!-- footer bottom bar start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <!-- footer copyrights Center cell -->
                <div class="copyrights-center cell-12">
                    &copy; Copyright <b>E-İhracat Türkiye.</b> 2020. Tüm hakları saklıdır. <span><a
                            href="privacy.html">Gizlilik Politikası</a> | <a href="terms.html">Kullanım ve
									Üyelik Şartları</a></span>
                    <ul class="footer-menu-center">
                        <li>Development by <a href="index.html">Mindfactory</a></li>
                    </ul>
                </div>


            </div>
        </div>
    </div>
    <!-- footer bottom bar end -->

</footer>
<!-- Footer end -->

<!-- Back to top Link -->
<div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>

<!-- WP Button -->
<div id="contactWp">
    <a target="_blank" href="https://wa.me/908503469956">
        <i class="fa fa-whatsapp"></i>
    </a>
</div>
</div>

