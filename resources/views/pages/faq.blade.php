@php
    $faqs = Helper::findCustomData('Faq');
$popularPosts =Helper::recentPosts(3);
@endphp
		<!-- Content Start -->
		<div id="contentWrapper">
			<div class="page-title title-1">
				<div class="container">
					<div class="row">
						<div class="cell-12">
							<h1 class="fx" data-animate="fadeInLeft">Sıkça Sorulan <span>Sorular</span></h1>
							<div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
								<span class="bold">Buradasınız:</span><a href="#">Anasayfa</a><span
									class="line-separate">/</span><a href="#">S.S.S</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="sectionWrapper">
				<div class="container">
					<div class="row">
						<div class="cell-9">
							<h3 class="block-head">Sıkça Sorulan Sorular</h3>
							<p class="hint">{{__('sss.title')}}</p>
							<p>{{__('sss.description')}}
							</p>

							<ul id="accordion" class="accordion">
                               @isset($faqs) @forelse($faqs as $key => $faq)
								<li>
									<h3 class="skew-25"><a href="#"><span class="skew25">{{$faq['question']}}</span></a></h3>
									<div class="accordion-panel active">{{$faq['answer']}}
									</div>
								</li>
                                    @empty
                                @endforelse
                                   @endisset
							</ul>
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
                                            @forelse($popularPosts as $post)
                                                @php($dateFull = Helper::getDateForHuman($post->created_at))
											<li>
												<div class="post-img">
                                                    <a href="{{route('post.find',$post->slug)}}">
													<img src="{{$post->thumbnail}}" alt=""></a>
												</div>
												<div class="widget-post-info">
													<h4>
														<a href="{{route('post.find',$post->slug)}}">
															{{$post->title}}
														</a>
													</h4>
													<div class="meta">
														<span><i class="fa fa-clock-o"></i>{{$dateFull}}</span>
													</div>
												</div>
											</li>
                                                @empty
                                                @endforelse
										</ul>
									</div>
								</li>

								@include('pages.partials.contact_info')
							</ul>
						</aside>
					</div>
				</div>
			</div>

		</div>
		<!-- Content End -->
