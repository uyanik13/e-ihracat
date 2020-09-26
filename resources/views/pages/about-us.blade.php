@php
    $AboutUSMembers = Helper::findCustomData('AboutUSMembers');
@endphp

<!-- Content Start -->
<div id="contentWrapper">
    <div class="page-title title-1">
        <div class="container">
            <div class="row">
                <div class="cell-12">
                    <h1 class="fx" data-animate="fadeInLeft">Biz <span>Kimiz?</span></h1>
                    <div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
                        <span class="bold">Buradasınız:</span><a href="#">Anasayfa</a><span
                            class="line-separate">/</span><a href="#">Hakkımızda </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sectionWrapper">
        <div class="container">
            <div class="fx" data-animate="fadeInUp">
                <h3 class="block-head">E-İhracat Gelecektir!</h3>
                <div class="cell-6">
                    <p>
                        Türkiye'nin E-İhracat Platformu, küresel ticaretin sınırlarını kaldırmak üzere 2018
                        yılında
                        İstanbul merkezli
                        olarak kuruldu. Alanında uzman deneyimli yönetim kadrosu ile Türkiye'de onlarca marka ve
                        üreticilere E-İhracat
                        hakkında çeşitli destekler sağlamakta olan Türkiyenin öncü e-ihracat plafromu.
                    </p>

                    <p>
                        Türkiye’nin geleceği olarak gördüğümüz E-İhracatı, ihracat potansiyeli olan tüm KOBİ
                        lere ve
                        büyük üreticilere
                        anlatmak ve ihracatımıza katkı sağlamak için yola çıktık.
                    </p>

                    <p>
                        Sektörün ihtiyaçlarını yakından takip ederek, genç ve dinamik ekibimizle beraber
                        çözümler
                        üretmek için varız.
                        Platformumuza üye olan yüzlerce insanla beraber geleceğe umutla bakmaktayız.
                    </p>

                    <p>
                        Türkiye'nin sürdürülebilir ekonomik kalkınmasını desteklemek bizim en büyük
                        motivasyonumuz.
                    </p>
                    <div class="aboutBtnArea">
                        <a class="btn btn-md btn-skew btn-3d main-bg" href="our-services">
                            <span><i class="fa fa-gift selectedI"></i>Hizmetlerimiz</span>
                        </a>
                        <a class="btn btn-md btn-skew btn-3d main-bg" href="/panel/login">
                            <span><i class="fa fa-user-secret selectedI"></i>Partnerlik Başvurusu</span>
                        </a>
                        <a class="btn btn-md btn-skew btn-3d main-bg" href="#">
                            <span><i class="fa fa-user-plus selectedI"></i>Üyelik</span>
                        </a>
                    </div>
                </div>
                <div class="cell-6">
                    <figure>
                        <img src="{{asset('theme/images/about.png')}}" alt="">
                    </figure>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="padd-top-50">
                <div class="cell-6 fx" data-animate="fadeInLeft" style="padding-right: 10px;">
                    <div class="row">
                        <div>
                            <h3 class="block-head">Misyonumuz</h3>
                            <p>
                                Türkiye’deki işletmelerin yurt dışı pazarlarına açılmasının kolaylığını tüm
                                Türkiye’ye anlatmak ve
                                ihracatımıza katkı sağlamaktır.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="cell-1"></div>
                <div class="cell-5 fx" data-animate="fadeInRight" style="padding-left: 10px;">
                    <div class="row">
                        <div>
                            <h3 class="block-head">Vizyonumuz</h3>
                            <p>
                                Bünyemizde bulunan genç e-ihracatçıları geleceğe hazırlayarak Türkiye’nin
                                potansiyelini gün yüzüne çıkarmak ve
                                Türkiye’de olduğu gibi global alandada lider bir platform olarak yer almaktır.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sectionWrapper gry-pattern">
        <div class="container team-boxes">
            <h3 class="block-head">Yönetim Kurulu Üyelerimiz</h3>
            <p>
                Birbirinden deneyimli, alanında uzman yönetim kurulu üyelerimiz ile Türkiye’nin e-ihracatına
                katkı sağlıyoruz.
            </p>
            @isset($AboutUSMembers)
                @forelse($AboutUSMembers as $key => $member)

                    <div class="cell-4 fx" data-animate="bounceIn" data-animation-delay="{{200*$key}}">
                        <div class="team-box">
                            <div class="team-img">
                                @isset($member['image'])
                                    <img alt="" src="{{$member['image']}}">
                                @endisset
                                @isset($member['name'])
                                    <h3>{{$member['name']}}</h3>
                                @endisset
                            </div>
                            <div class="team-details">
                                @isset($member['name'])
                                    <h3>{{$member['name']}}</h3>
                                @endisset
                                @isset($member['position'])
                                    <div class="t-position">{{$member['position']}}</div>
                                @endisset
                                <div class="team-socials">
                                    <ul>
                                        <li>
                                            @isset($member['url'])
                                                <a class="teamLinkedin" href="{{$member['url']}}" title="linkedin">
                                                    <span class="fa fa-linkedin"></span>
                                                </a>
                                            @endisset
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
                @endisset
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


</div>
<!-- Content End -->
