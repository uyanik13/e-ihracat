@php
$allUsers;
if (isset($filterUsers)){
    $allUsers = $filterUsers;
}else{
    $allUsers = \App\Models\User::all();
}
$popularUsers = Helper::getPopularPartners();
@endphp

		<!-- Content Start -->
		<div id="contentWrapper">
			<div class="page-title title-1">
				<div class="container">
					<div class="row">
						<div class="cell-12">
							<h1 class="fx" data-animate="fadeInLeft">{{__('lang.partner_list')}}</h1>
							<div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
								<span class="bold">{{__('lang.you_are_here')}}:</span><a href="#">{{__('lang.homepage')}}</a><span
									class="line-separate">/</span><a href="#">{{__('lang.partners')}}</a><span
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


								<li class="widget r-posts-w" >
									<h3 class="widget-head">{{__('lang.most_rated_partners')}}</h3>
									<div class="widget-content">
										<ul>
                                            @forelse($popularUsers as $popular)
                                                @php
                                                    $avgPoint = Helper::getPartnerPointAvarage($popular->id);
                                                    $fullPoint = (int)$avgPoint;
                                                    $emptyPoint = 5-$fullPoint;
                                                @endphp
											<li>
												<div class="post-img">
													<img src="{{$popular->avatar}}" alt="">
												</div>
												<div class="widget-post-info">
													<h4>
														<a href="{{route('partner.find',$popular->id)}}">
															{{$popular->name}}
														</a>
													</h4>
													<div class="meta">
														<a href="{{route('partner.find',$popular->id)}}">
                                                            @for ($i = 0; $i < $fullPoint; $i++)
                                                                <i class="fa fa-star"></i>
                                                            @endfor
                                                            @for ($i = 0; $i < $emptyPoint; $i++)
                                                                <i class="fa fa-star-o"></i>
                                                            @endfor
                                                            ({{$avgPoint}})
                                                        </a>
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
                                    $avgPoint = Helper::getPartnerPointAvarage($user->id);
                                    $fullPoint = (int)$avgPoint;
                                    $emptyPoint = 5-$fullPoint;
                                    @endphp
                                    <div class="post-item fx" data-animate="fadeInLeft">
                                        <div class="post-image">
                                            <a href="{{route('partner.find',$user->id)}}">
                                                <div class="mask"></div>
                                                <img src="{{$user->avatar}}" alt="Partner Logo">
                                            </a>
                                        </div>
                                        <article class="post-content">
                                            <div class="post-info-container">
                                                <div class="post-info">
                                                    <h2><a class="main-color" href="{{route('partner.find',$user->id)}}">{{$user->name}}</a>
                                                    </h2>
                                                    <ul class="list-details">
                                                        <li>
                                                            <i class="fa fa-map-marker"></i> <span
                                                                class="main-color">{{__('lang.partner_location')}}:</span>@isset($user->address)
                                                             {{$user->address}}@endisset
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check"></i> <span
                                                                class="main-color">{{__('lang.partner_rate')}}:</span>
                                                            @for ($i = 0; $i < $fullPoint; $i++)
                                                                <i class="fa fa-star"></i>
                                                            @endfor
                                                            @for ($i = 0; $i < $emptyPoint; $i++)
                                                                <i class="fa fa-star-o"></i>
                                                            @endfor
                                                            ({{substr($avgPoint,0,3)}})
                                                        </li>
                                                        @isset($aboutData['website'])
                                                        <li>
                                                            <i class="fa fa-globe"></i> <span class="main-color">{{__('lang.partner_website')}}:</span> <a
                                                                href="{{$aboutData['website']}}">{{$aboutData['website']}}</a>
                                                        </li>
                                                        @endisset
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
