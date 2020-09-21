<!-- Content Start -->
@php
    $dateArray = Helper::getDateForHuman($post->created_at,1);
@endphp
<div id="contentWrapper">
    <div class="page-title title-1">
        <div class="container">
            <div class="row">
                <div class="cell-12">
                    <h1 class="fx" data-animate="fadeInLeft">Blog <span>Başlığı</span></h1>
                    <div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
                        <span class="bold">Buradasınız:</span><a href="#">Anasayfa</a><span
                            class="line-separate">/</span><a href="#">Blog</a><span
                            class="line-separate">/</span><span>Blog Detayı</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sectionWrapper">
        <div class="container">
            <div class="row">
                <div class="cell-9">
                    <div class="blog-posts">
                        <div class="post-item fx" data-animate="fadeInLeft">
                            <div class="details-img">
                                <div class="post-lft-info">

                                    <div class="main-bg">{{$dateArray[0]}}<br>{{$dateArray[1]}}<br>{{$dateArray[2]}}<span class="tri-col"></span>
                                    </div>
                                </div>
                                <img src="{{$post->thumbnail}}" alt="Our Blog post image goes here">
                            </div>
                            <article class="post-content">
                                <div class="post-info-container">
                                    <h1 class="main-color">{{$post->title}}
                                    </h1>
                                </div>
                                {{$post->content}}
                                {{--										<div class="post-tags">--}}
                                {{--											<i class="fa fa-tags"></i><span>Etiketler: </span><a--}}
                                {{--												href="#">E-İhracat</a>,<a>--}}
                                {{--												İhracat</a>,<a href="#">--}}
                                {{--												Dijital</a>,<a> İthalat</a>,<a> Ticaret</a>--}}
                                {{--										</div>--}}
                                <div class="share-post">
                                    <span class="sh">Gönderiyi Paylaş:</span>
                                    <div id="shareme" data-text="Share this post"></div>
                                </div>
                            </article>
                        </div><!-- .post-item end -->
                        <div class="comments">
                            <h3 class="block-head">Yorumlar</h3>
                            <ul class="comment-list">
                                @forelse($post->comments as $comment)
                                    @php
                                        $commentDate = Helper::getDateForHuman($comment->created_at);
                                    @endphp
                                    <li>
                                        <article class="comment">
                                            <img src="{{$comment->user->avatar}}" alt="avatar" class="comment-avatar">
                                            <div class="comment-content">
                                                <h5 class="comment-author skew-25">
                                                    <span class="author-name skew25">{{$comment->user->name}}</span>
                                                    <a href="#" class="comment-reply main-bg"><span
                                                            class="skew25"><i
                                                                class="fa fa-comment"></i>cevapla</span></a>
                                                    <span class="comment-date skew25">{{$commentDate}}</span>
                                                    <span class="comment-date skew25"></span>
                                                </h5>
                                                <p>
                                                    {{$comment->content}}
                                                </p>
                                            </div>
                                        </article><!-- End .comment -->
                                        @php
                                            @endphp
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
                                        </ul><!-- End .child-comment -->
                                    </li>
                                @empty
                                @endforelse
                            </ul><!-- End .comment-list -->
                        </div>
                        <form action="#" class="leave-comment contact-form">
                            <h3 class="block-head">Yorum Yap</h3>
                            <p>Aşağıdaki gerekli alanları doldurarak sizde bu haber hakkındaki fikirlerinizi
                                paylaşabilirsiniz.</p>
                            <div class="row">
                                <div class="cell-6">
                                    <div class="form-input">
                                        <input type="text" placeholder="Ad Soyad" required>
                                    </div>
                                </div>
                                <div class="cell-6">
                                    <div class="form-input">
                                        <input type="email" placeholder="E-Posta Adresi" required>
                                    </div>
                                </div>
                                <div class="cell-12">
                                    <div class="form-input">
												<textarea class="txt-box textArea" name="message" cols="40" rows="7"
                                                          id="messageTxt" placeholder="Yorumunuz" spellcheck="true"
                                                          required></textarea>
                                    </div>
                                </div>
                                <div class="cell-12">
                                    <input type="submit" class="btn btn-large main-bg" value="Yorum Yap">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <aside class="cell-3 right-sidebar">
                    <ul class="sidebar_widgets">
                        <li class="widget search-w fx" data-animate="fadeInRight">
                            <h3 class="widget-head">Arama</h3>
                            <div class="widget-content">
                                <form action="#" method="get">
                                    <input type="text" name="t" id="t2-search" class="txt-box"
                                           placeholder="Anahtar Kelime Girin..." />
                                    <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </li>

                        <li class="widget r-posts-w fx" data-animate="fadeInRight">
                            <h3 class="widget-head">Popüler Gönderiler</h3>
                            <div class="widget-content">
                                <ul>
                                    <li>
                                        <div class="post-img">
                                            <img src="{{asset('theme/images/blog/masonry/3.jpg')}}" alt="">
                                        </div>
                                        <div class="widget-post-info">
                                            <h4>
                                                <a href="blog-single.blade.php">
                                                    Gagiad E-ihracat’ı değerlendirdi
                                                </a>
                                            </h4>
                                            <div class="meta">
                                                <span><i class="fa fa-clock-o"></i>10 Haziran 2020</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="post-img">
                                            <img src="{{asset('theme/images/blog/masonry/1.jpg')}}" alt="">
                                        </div>
                                        <div class="widget-post-info">
                                            <h4>
                                                <a href="blog-single.blade.php">
                                                    MOBİL : "İhracatta 'dijital devrim' başlıyor"
                                                </a>
                                            </h4>
                                            <div class="meta">
                                                <span><i class="fa fa-clock-o"></i>10 Haziran 2020</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="post-img">
                                            <img src="{{asset('theme/images/blog/masonry/2.jpg')}}" alt="">
                                        </div>
                                        <div class="widget-post-info">
                                            <h4>
                                                <a href="blog-single.blade.php">
                                                    "Yeni düzende
                                                    e-ihracat’a ayak uyduramayan
                                                    kaybolur"
                                                </a>
                                            </h4>
                                            <div class="meta">
                                                <span><i class="fa fa-clock-o"></i>10 Haziran 2020</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="widget blog-cat-w fx" data-animate="fadeInLeft">
                            <h3 class="widget-head">Bizimle İletişime Geçebilirsiniz</h3>
                            <div class="widget-content">
                                <ul class="sidebarCallLocation">
                                    <li><a title="Whatsapp Destek Hattı" href="https://wa.me/908503469956"><i
                                                class="fa fa-whatsapp fa-2x"></i></a></li>
                                    <li><a title="Telefonla Ulaşın" href="tel:+908503469956"><i
                                                class="fa fa-phone fa-2x"></i></a>
                                    <li><a title="E-Posta İletişim" href="mailto:info@eihracatturkiye.com"><i
                                                class="fa fa-envelope fa-2x"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </aside>
            </div>
        </div>
    </div>

</div>
<!-- Content End -->
