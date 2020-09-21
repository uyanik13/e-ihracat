@php($allPosts = \App\utils\Helpers\Helper:: all_posts())

<!-- Content Start -->
		<div id="contentWrapper">
			<div class="page-title title-1">
				<div class="container">
					<div class="row">
						<div class="cell-12">
							<h1 class="fx" data-animate="fadeInLeft">Haberler </h1>
							<div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
								<span class="bold">Buradasınız:</span><a href="#">Anasayfa</a><span
									class="line-separate">/</span><a href="#">Blog</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="sectionWrapper">
				<div class="container">
					<div class="row">
						<div class="cell-9 masonry">
							<div class="blog-posts">
                            @forelse($allPosts as $post)
								<div class="post-item fx" data-animate="fadeInLeft">
									<div class="post-image">
										<a href="{{route('post.find',$post->id)}}">
											<div class="mask"></div>
											<div class="post-lft-info">

												<div class="main-bg">{{$post->created_at->format('d M y')}}<br>Haziran<br>2020</div>
											</div>
											<img src="{{$post->thumbnail}}" alt="Blog Görseli">
										</a>
									</div>
									<article class="post-content">
										<div class="post-info-container">
											<div class="post-info">
												<h2><a class="main-color" href="../components/detail_components/blog-single.blade.php">{{$post->title}}</a></h2>
											</div>
										</div>
										<p>
											{!! substr($post->content,0,100) !!}
									</article>
									<a class="btn btn-md btn-3d main-bg fx animated fadeInUp readMoreBtn" href="#"
										data-animate="fadeInUp" data-animation-delay="100"
										style="animation-delay: 100ms;">
										<span><i class="fa fa-search-plus selectedI"></i>Devamını Oku</span>
									</a>
								</div>
                            @empty
                            @endforelse

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
                                            @php($recentPosts = \App\utils\Helpers\Helper::recentPosts(3))
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
					</div>
				</div>
			</div>

		</div>
		<!-- Content End -->


