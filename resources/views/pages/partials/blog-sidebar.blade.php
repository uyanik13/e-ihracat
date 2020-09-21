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

                    @forelse($recentPosts as $post)
                            <li>
                        <div class="post-img">
                            <img src="{{$post->thumbnail}}" alt="">
                        </div>
                        <div class="widget-post-info">
                            <h4>
                                <a href="../components/detail_components/blog-single.blade.php">
                                    {{$post->title}}
                                </a>
                            </h4>
                            <div class="meta">
                                <span><i class="fa fa-clock-o"></i>{{$post->created_at->format('d M y')}}</span>
                            </div>
                        </div>
                    </li>
                        @empty
                    @endforelse
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
