@php
    $allPosts = Helper:: all_posts();
    $recentPosts = \App\utils\Helpers\Helper::recentPosts(3);
@endphp

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
								<div class="post-item" style="margin-bottom: 45px" >
									<div class="post-image">
										<a href="{{route('post.find',$post->slug)}}">
											<div class="mask"></div>
											<div class="post-lft-info">

                                            <div class="main-bg">{{$post->created_at->diffForHumans()}}</div>
											</div>
											<img src="{{$post->thumbnail}}" alt="Blog Görseli">
										</a>
									</div>
									<article class="post-content">
										<div class="post-info-container">
											<div class="post-info">
												<h2><a class="main-color" href="{{route('post.find',$post->slug)}}">{{$post->title}}</a></h2>
											</div>
										</div>
											{!! substr($post->content,0,250) !!}
									</article>
									<a class="btn btn-md btn-3d main-bg fx animated fadeInUp readMoreBtn" href="{{route('post.find',$post->slug)}}"
										data-animate="fadeInUp" data-animation-delay="100"
										style="animation-delay: 100ms;">
										<span><i class="fa fa-search-plus selectedI"></i>Devamını Oku</span>
									</a>
								</div>
                            @empty
                            @endforelse
							</div>
						</div>
                         @include('pages.partials.blog-sidebar')
					</div>
				</div>
			</div>

		</div>
		<!-- Content End -->


