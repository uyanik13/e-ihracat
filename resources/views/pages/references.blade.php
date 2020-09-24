@php
    $references = Helper::findCustomData('References');
@endphp
<!-- Content Start -->
<div id="contentWrapper">
    <div class="page-title title-1">
        <div class="container">
            <div class="row">
                <div class="cell-12">
                    <h1 class="fx" data-animate="fadeInLeft">Referanslarımız</h1>
                    <div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
                        <span class="bold">Buradasınız:</span><a href="#">Anasayfa</a><span
                            class="line-separate">/</span><a href="#">Referanslar </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="referanceArea" class="sectionWrapper">
        <div class="container">
            <div class="row">
                <div class="cell-12">
                    <div class="clearfix"></div>
                    <div class="grid-list">
                        <div class="row">
                            @isset($references)
                                @forelse($references as $key => $reference)
                                    <div class="cell-2 fx shop-item" data-animate="fadeInUp">
                                        <div class="item-box">
                                            <h3 class="item-title"><a
                                                    href="{{$reference['url']}}">{{$reference['name']}} </a>
                                            </h3>
                                            <div class="item-img">
                                                <a href="{{$reference['url']}}"><img alt=""
                                                                                     src="{{$reference['image']}}"></a>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            @endisset
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Content End -->
