@php
$allUsers;
if (isset($filterUsers)){
    $allUsers = $filterUsers;
}else{
    $allUsers = \App\Models\User::all();
}
$popularUsers = \App\Models\User::inRandomOrder()->get();
@endphp

		<!-- Content Start -->
		<div id="contentWrapper">
			<div class="page-title title-1">
				<div class="container">
					<div class="row">
						<div class="cell-12">
							<h1 class="fx" data-animate="fadeInLeft">Partner <span>Listesi</span></h1>
							<div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
								<span class="bold">Buradasınız:</span><a href="#">Anasayfa</a><span
									class="line-separate">/</span><a href="#">Partnerler</a><span
									class="line-separate"></span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="partnerList" class="sectionWrapper">
				<div class="container">
					<div class="row">
						<aside class="cell-3 right-sidebar">
							<ul class="sidebar_widgets">
								@include('pages.partials.partner_search')

								{{--<li class="widget r-posts-w fx" data-animate="fadeInLeft">
									<h3 class="widget-head">Detaylı Filtreleme</h3>
									<div class="widget-content">
										<div class="cell-12 contact-form fx" data-animate="fadeInLeft" id="contact">
											<mark id="message"></mark>
											<form class="form-signin cform" method="post" action="php/contact.php"
												id="cform" autocomplete="on">
												<div class="form-input">
													<label>Çalışma Alanı:<span class="red">*</span></label>
													<select name="workCategory" id="workCategory">
														<option value="">Bilişim</option>
														<option value="">İhracat</option>
														<option value="">İthalat</option>
														<option value="">E-Ticaret</option>
														<option value="">Satış</option>
													</select>
												</div>
												<div class="form-input">
													<label>Lokasyon:<span class="red">*</span></label>
													<select name="workLocation" id="workLocation">
														<option value="">İstanbul</option>
														<option value="">Ankara</option>
														<option value="">İzmir</option>
														<option value="">Bolu</option>
														<option value="">Edirne</option>
													</select>
												</div>
												<div class="form-input" style="text-align: center;">
													<input type="submit" class="btn btn-large main-bg" value="Filtrele">
												</div>
											</form>
										</div>
									</div>
								</li>--}}

								<li class="widget r-posts-w fx" data-animate="fadeInLeft">
									<h3 class="widget-head">En Çok Oylanan Partnerler</h3>
									<div class="widget-content">
										<ul>
                                            @forelse($popularUsers as $popular)
											<li>
												<div class="post-img">
													<img src="{{$popular->avatar}}" alt="">
												</div>
												<div class="widget-post-info">
													<h4>
														<a href="our-services">
															{{$popular->name}}
														</a>
													</h4>
													<div class="meta">
														<a href="our-services"><i class="fa fa-star"></i>15</a>
													</div>
												</div>
											</li>
                                                @empty
                                            @endforelse
										</ul>
									</div>
								</li>



							</ul>
						</aside>
						<div class="cell-9 blog-thumbs">
							<div class="blog-posts partnerLists">
                                @forelse($allUsers as $user)
                                    @php
                                    $aboutData = json_decode($user->about_data,true);
                                    @endphp
                                    <div class="post-item fx" data-animate="fadeInLeft">
                                        <div class="post-image">
                                            <a href="{{route('partner.find',$user->name)}}">
                                                <div class="mask"></div>
                                                <img src="{{$user->avatar}}" alt="Partner Logo">
                                            </a>
                                        </div>
                                        <article class="post-content">
                                            <div class="post-info-container">
                                                <div class="post-info">
                                                    <h2><a class="main-color" href="{{route('partner.find',$user->name)}}">{{$user->name}}</a>
                                                    </h2>
                                                    <ul class="list-details">
                                                        <li>
                                                            <i class="fa fa-map-marker"></i> <span
                                                                class="main-color">Lokasyon:</span>
{{--                                                            İstanbul {{(string) $aboutData['country']['label']}}--}}
                                                        </li>
                                                       {{-- <li>
                                                            <i class="fa fa-check"></i> <span
                                                                class="main-color">Derecelendirme:</span>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-empty"></i>
                                                        </li>--}}
                                                        <li>
                                                            <i class="fa fa-globe"></i> <span class="main-color">Web
                                                                Site:</span> <a
                                                                href="https://www.eihracatturkiye.com">{{$aboutData['website']}}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                @empty
                                @endforelse
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- Content End -->
