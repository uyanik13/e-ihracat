﻿@php
    use App\Models\User;
    $partner = User::where('name',$itemId)->first();
    $partnerDate = Helper::getDateForHuman($partner->created_at);
    $blogsBelognsToPartner = Helper::blogsBelognsToPartner($partner->id);
    $comments = Helper::getComments($partner->id,1);
@endphp
<!-- Content Start -->
<div id="contentWrapper">
    <div class="page-title title-1">
        <div class="container">
            <div class="row">
                <div class="cell-12">
                    <h1 class="fx" data-animate="fadeInLeft">Partner <span>Başlığı</span></h1>
                    <div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
                        You Are In:</span><a href="#">Anasayfa</a><span class="line-separate">/</span><a
                            href="#">Partnerler </a><span class="line-separate">/</span><span>Partner
									Başlığı</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sectionWrapper partnerDetailSection">
        <div class="container">
            <div class="row">
                <div class="cell-8">
                    <div class="partnerOverview">
                        <div class="partnerLogo">
                            <figure>
                                <img src="{{$partner->avatar}}" alt="">
                            </figure>
                        </div>
                        <div class="partnerShortInfo">
                            <h1 class="block-head  margin-bottom-40 fx animated fadeInUp"
                                data-animate="fadeInUp">
                                <span>Partner Ünvanı</span>
                            </h1>
                            <ul class="list-details">
                                <li>
                                    <i class="fa fa-map-marker"></i> <span class="main-color">Lokasyon:</span>
                                    İstanbul
                                </li>
                                <li>
                                    <i class="fa fa-book"></i> <span class="main-color">Açık Adres:</span>
                                    {{$partner->address}}
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i> <span class="main-color">Telefon:</span> 0555
                                    {{$partner->phone}}
                                </li>
                                <li>
                                    <i class="fa fa-send-o"></i> <span class="main-color">E-Posta:</span>
                                    {{$partner->email}}
                                </li>
                                <li>
                                    <i class="fa fa-calendar"></i> <span class="main-color">Kayıt Tarihi:</span>
                                    {{$partnerDate}}
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> <span class="main-color">Derecelendirme:</span>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-empty"></i>
                                </li>
                                <li>
                                    <i class="fa fa-globe"></i> <span class="main-color">Web Site:</span> <a
                                        href="https://www.eihracatturkiye.com">{{json_decode($partner->about_data,true)['website']}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="partnerIntroduction">
                        <h2 class="block-head  margin-bottom-40 fx animated fadeInUp" data-animate="fadeInUp">
                            <span>Partner Tanıtım Alanı</span>
                        </h2>
                        {!! json_decode($partner->about_data,true)['bio'] !!}
                    </div>

                    <!-- Recent Portfolio projects -->
                    <div class="sectionWrapper">
                        <h3 class="block-head">Partner Blog</h3>
                        <div class="portfolioGallery portfolio">
                            @isset($blogsBelognsToPartner)
                                @foreach($blogsBelognsToPartner as $post)
                                    <div>
                                        <div class="portfolio-item">
                                            <div class="img-holder">
                                                <div class="img-over">
                                                    <a href="{{route('post.find',$post->slug)}}" class="fx link"><b
                                                            class="fa fa-link"></b></a>
                                                    <a href="{{$post->thumbnail}}" class="fx zoom"
                                                       data-gal="prettyPhoto[pp_gal]"><b
                                                            class="fa fa-search-plus"></b></a>
                                                </div>
                                                <img alt="" src="{{$post->thumbnail}}">
                                            </div>
                                            <div class="name-holder">
                                                <a href="{{route('post.find',$post->slug)}}" class="project-name">{{$post->title}}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endisset
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="comments">
                        <h3 class="block-head">Yorumlar</h3>
                        <ul class="comment-list">
                            <li>
                                @isset($comments)
                                    @foreach($comments as $comment)
                                    <article class="comment">
                                        <img src="{{asset('theme/images/people/1.jpg')}}" alt="avatar"
                                             class="comment-avatar">
                                        <div class="comment-content">
                                            <h5 class="comment-author skew-25">
                                                <span class="author-name skew25">Berk Yılmaz</span>
                                                <a href="#" class="comment-reply main-bg"><span class="skew25"><i
                                                            class="fa fa-comment"></i>cevapla</span></a>
                                                <span class="comment-date skew25">15 Haziran2020</span>
                                            </h5>
                                            <p>
                                                Güzel haber, teşekkür.
                                            </p>
                                        </div>
                                    </article>
                                    <ul class="child-comment">
                                    <li>
                                        <article class="comment">
                                            <img src="{{asset('theme/images/people/1.jpg')}}" alt="avatar"
                                                 class="comment-avatar">
                                            <div class="comment-content">
                                                <h5 class="comment-author skew-25">
                                                    <span class="author-name skew25">Arda Kök</span>
                                                    <a href="#" class="comment-reply main-bg"><span
                                                            class="skew25"><i
                                                                class="fa fa-comment"></i>cevala</span></a>
                                                    <span class="comment-date skew25">15 Haziran 2020</span>
                                                </h5>
                                                <p>Dijital dönüşüme merhaba</p>
                                            </div>
                                        </article><!-- End .comment -->
                                    </li>
                                    <li>
                                        <article class="comment">
                                            <img src="{{asset('theme/images/people/1.jpg')}}" alt="avatar"
                                                 class="comment-avatar">
                                            <div class="comment-content">
                                                <h5 class="comment-author skew-25">
                                                    <span class="author-name skew25">Arda Kök</span>
                                                    <a href="#" class="comment-reply main-bg"><span
                                                            class="skew25"><i
                                                                class="fa fa-comment"></i>cevala</span></a>
                                                    <span class="comment-date skew25">15 Haziran 2020</span>
                                                </h5>
                                                <p>Dijital dönüşüme merhaba</p>
                                            </div>
                                        </article><!-- End .comment -->
                                    </li>
                                    <li>
                                        <article class="comment">
                                            <img src="{{asset('theme/images/people/1.jpg')}}" alt="avatar"
                                                 class="comment-avatar">
                                            <div class="comment-content">
                                                <h5 class="comment-author skew-25">
                                                    <span class="author-name skew25">Arda Kök</span>
                                                    <a href="#" class="comment-reply main-bg"><span
                                                            class="skew25"><i
                                                                class="fa fa-comment"></i>cevala</span></a>
                                                    <span class="comment-date skew25">15 Haziran 2020</span>
                                                </h5>
                                                <p>Dijital dönüşüme merhaba</p>
                                            </div>
                                        </article><!-- End .comment -->
                                    </li>
                                </ul>
                                    @endforeach
                                @endisset
                            </li>
                        </ul><!-- End .comment-list -->
                    </div>
                    @guest
                        Yorum yapmak için
                        <a href="/panel/login" class="btn btn-danger"> Giriş Yapınız</a>
                    @endguest
                    @auth
                        <form action="{{route('add_comment_to_product',$partner->id)}}" method="post" class="leave-comment contact-form">
                            @csrf
                            <h3 class="block-head">Yorum Yap</h3>
                            <p>Aşağıdaki gerekli alanları doldurarak sizde bu haber hakkındaki fikirlerinizi
                                paylaşabilirsiniz.</p>
                            <div class="row">

                                {{--<div class="cell-6">
                                    <div class="form-input">
                                        <input type="text" placeholder="Ad Soyad" required>
                                    </div>
                                </div>
                                <div class="cell-6">
                                    <div class="form-input">
                                        <input type="email" placeholder="E-Posta Adresi" required>
                                    </div>
                                </div>--}}

                                <div class="cell-12">
                                    <div class="form-input rating">
                                        <span class="bold">Derecelendirmeniz: </span>
                                        <span>1<input value="1" class="divideThis" type="radio" name="point"></span>
                                        <span>2<input value="2" class="divideThis" type="radio" name="point"></span>
                                        <span>3<input value="3" class="divideThis" type="radio" name="point"></span>
                                        <span>4<input value="4" class="divideThis" type="radio" name="point"></span>
                                        <span>5<input value="5" class="divideThis" type="radio" name="point"></span>

                                    </div>
                                </div>
                                <div class="cell-12">
                                    <div class="form-input">
											<textarea class="txt-box textArea" name="content" cols="40" rows="7"
                                                      id="messageTxt" placeholder="Yorumunuz" spellcheck="true"
                                                      required></textarea>
                                        <input type="hidden" name="isFromPartnerPage" value="1">
                                    </div>
                                </div>
                                <div class="cell-12">
                                    <input type="submit" class="btn btn-large main-bg" value="Yorum Yap">
                                </div>
                            </div>
                        </form>
                    @endauth


                </div>

                <aside class="cell-4 right-sidebar">
                    <ul class="sidebar_widgets">
                        @include('pages.partials.partner_search')

                        <li class="widget blog-cat-w fx" data-animate="fadeInRight">
                            <h3 class="widget-head">Çalışma Alanları</h3>
                            <div class="widget-content">
                                <ul class="list list-ok alt">
                                    <li>E-İhracat</li>
                                    <li>Dropshipping
                                    </li>
                                    <li>Ulusal Ticaret</li>
                                    <li>Yerel Ticaret</li>
                                </ul>
                            </div>
                        </li>

                        <li class="widget r-posts-w fx" data-animate="fadeInRight">
                            <h3 class="widget-head">İletişim Formu</h3>
                            <div class="widget-content">
                                <div class="cell-12 contact-form fx" data-animate="fadeInLeft" id="contact">
                                    <mark id="message"></mark>
                                    <form class="form-signin cform" method="post" action="{{route('contact.form')}}"
                                          id="cform"
                                          autocomplete="on">
                                        @csrf
                                        <div class="form-input">
                                            <label>Ad Soyad<span class="red">*</span></label>
                                            <input type="text" required="required" name="name" id="name">
                                        </div>
                                        <div class="form-input">
                                            <label>E-Posta<span class="red">*</span></label>
                                            <input name="email" type="email" id="email" required="required">
                                        </div>
                                        <div class="form-input">
                                            <label>Telefon</label>
                                            <input name="phone" type="text" id="phone">
                                        </div>
                                        <div class="form-input">
                                            <label>Mesaj<span class="red">*</span></label>
                                            <textarea required="required" name="message" cols="40" rows="7"
                                                      id="messageTxt" spellcheck="true"></textarea>
                                        </div>
                                        <div class="form-input" style="text-align: center;">
                                            <input type="submit" class="btn btn-large main-bg"
                                                   value="Gönder">&nbsp;&nbsp;<input type="reset"
                                                                                     class="btn btn-large"
                                                                                     value="Temizle" id="reset">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </aside>
            </div>
        </div>
    </div>

</div>
<!-- Content End -->
<script>
    import İnput from '../../../js/src/views/forms/form-elements/input/Input'
    export default {
        components: {İnput}
    }
</script>