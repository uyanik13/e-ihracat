@php
    $AboutUSMembers = Helper::findCustomData('AboutUSMembers');
    $fourBox = Helper::findCustomData('fourBox');
    $aboutUsPage = Helper::findCustomData('aboutUsPage');
@endphp

<!-- Content Start -->
<div id="contentWrapper">
    <div class="page-title title-1">
        <div class="container">
            <div class="row">
                <div class="cell-12">
                <h1 class="fx" data-animate="fadeInLeft">{{__('lang.about_us')}}</span></h1>
                    <div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
                    <span class="bold">{{__('lang.you_are_here')}}:</span><a href=/">{{__('lang.homepage')}}</a><span
                            class="line-separate">/</span><a href="#">{{__('lang.about_us')}} </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sectionWrapper">
        <div class="container">
            <div class="fx" data-animate="fadeInUp">
                <h3 class="block-head">{{__('lang.export_future')}}</h3>
                <div class="cell-6">
                    @isset($aboutUsPage['content'])  
                    {!! $aboutUsPage['content'] !!}
                    <div class="aboutBtnArea">
                        <a class="btn btn-md btn-skew btn-3d main-bg" href="our-services">
                        <span><i class="fa fa-gift selectedI"></i>{{__('lang.our_services')}}</span>
                        </a>
                        <a class="btn btn-md btn-skew btn-3d main-bg" href="/panel/register">
                            <span><i class="fa fa-user-secret selectedI"></i>{{__('lang.become_a_partner')}}</span>
                        </a>
                    </div>
                    @endisset
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
                        <h3 class="block-head">{{__('lang.our_mission')}}</h3>
                        @isset($aboutUsPage['mission'])
                            
                        
                            {!! $aboutUsPage['mission'] !!}
                            @endisset
                        </div>
                    </div>
                </div>
                <div class="cell-1"></div>
                <div class="cell-5 fx" data-animate="fadeInRight" style="padding-left: 10px;">
                    <div class="row">
                        <div>
                            @isset($aboutUsPage['vision'])
                            <h3 class="block-head">{{__('lang.our_vision')}}</h3>
                            {!! $aboutUsPage['vision'] !!}
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sectionWrapper gry-pattern">
        <div class="container team-boxes">
            <h3 class="block-head">{{__('lang.our_team_title')}}</h3>
            <p>
               {{__('lang.our_team_desc')}}
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
                <div class="fun-number">@isset($fourBox['allusers']){{$fourBox['allusers']}}+ @endisset</div>
                <div class="fun-text main-bg">{{__('lang.total_members')}}</div>
                <div class="fun-icon"><i class="fa fa-leaf"></i></div>
            </div>
            <!-- staff item end -->

            <!-- staff item start -->
            <div class="cell-2 fx" data-animate="fadeInDown" data-animation-delay="400">
                <div class="fun-number">@isset($fourBox['allusers']){{$fourBox['providers']}}+ @endisset</div>
                <div class="fun-text main-bg">{{__('lang.total_providers')}}</div>
                <div class="fun-icon"><i class="fa fa-clock-o"></i></div>
            </div>
            <!-- staff item end -->

            <!-- staff item start -->
            <div class="cell-4 fx" data-animate="fadeInDown">
                <div class="fun-title bold"><span>{{__('lang.our_missions')}} </span></div>
            </div>
            <div class="cell-2 fx" data-animate="fadeInDown" data-animation-delay="600">
                <div class="fun-number">@isset($fourBox['allusers']){{$fourBox['employments']}}+ @endisset</div>
                <div class="fun-text main-bg">{{__('lang.employments')}}</div>
                <div class="fun-icon"><i class="fa fa-group"></i></div>
            </div>
            <!-- staff item end -->

            <!-- staff item start -->
            <div class="cell-2 fx" data-animate="fadeInDown" data-animation-delay="800">
                <div class="fun-number">@isset($fourBox['allusers']) {{$fourBox['exportvolume']}} + @endisset</div>
                <div class="fun-text main-bg">{{__('lang.e_export_volume')}}</div>
                <div class="fun-icon"><i class="fa fa-bell"></i></div>
            </div>
            <!-- staff item end -->

        </div><!-- .container end -->
    </div>
    <!-- FUN Staff end -->


</div>
