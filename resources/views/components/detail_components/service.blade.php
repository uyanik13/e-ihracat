﻿@php
    $findServiceswithoutId5 = Helper::findServiceswithoutId();
    $QuickServiceList = Helper::findCustomData('QuickServiceList');
@endphp


<!-- Content Start -->
<div id="contentWrapper">
    <div class="page-title title-1">
        <div class="container">
            <div class="row">
                <div class="cell-12">
                    <h1 class="fx" data-animate="fadeInLeft">{{$page->title}}
                    </h1>
                    <div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
                        <span class="bold">{{__('lang.you_are_here')}}:</span><a
                            href="#">{{__('lang.homepage')}}</a><span
                            class="line-separate">/</span><a href="#">{{__('lang.our_services')}} </a><span
                            class="line-separate">/</span><span>{{$page->title}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sectionWrapper">
        <div class="container">
            <div class="row">
                <div class="cell-9 servicesDetails">

                    <h1 class="block-head  margin-bottom-40 fx style6 animated fadeInUp"
                        data-animate="fadeInUp">
                        <span>{{$page->title}}</span>
                    </h1>
                    {!! html_entity_decode($page->content) !!}
                </div>
                <aside class="cell-3 right-sidebar" id="servicesAccordion">
                    <ul class="sidebar_widgets">

                        <li class="widget r-posts-w fx" data-animate="fadeInLeft">
                            <h3 class="widget-head">{{__('lang.our_services')}}</h3>
                            <div class="widget-content">
                                <ul>
                                    <li>
                                        <ul id="accordion2" class="accordion">
                                            @forelse($findServiceswithoutId5 as $key => $service)
                                                @php
                                                        $relevantServices = Helper::childServices($service->id);
                                                @endphp
                                                <li>
                                                    <h3><a href="partner-details.html"><span class="bold"
                                                                                             class="skew25">{{ substr($service->title,0,25)}}</span></a>
                                                    </h3>
                                                    @isset($relevantServices)
                                                        @php
                                                            $relevantServices =$relevantServices;
                                                        @endphp
                                                        <div class="accordion-panel {{$key == 0 ? 'active' : ''}}">
                                                            @isset($relevantServices)
                                                                @foreach ($relevantServices as $key => $relevantService)
                                                                    <a href="{{route('service.find',$relevantService->slug)}}">{{$relevantService['title']}}</a>
                                                                @endforeach
                                                            @endisset
                                                        </div>
                                                    @endisset
                                                </li>
                                            @empty
                                            @endforelse
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        @include('pages.partials.contact_info')
                        <li class="widget r-posts-w fx" data-animate="fadeInRight">
                            <h3 class="widget-head">{{__('lang.service_request_form')}}</h3>
                            <div class="widget-content">
                                <div class="cell-12 contact-form fx" data-animate="fadeInLeft" id="contact">
                                    <mark id="message"></mark>
                                    <form class="form-signin cform" method="post" action="{{route('contact.form')}}"
                                          id="cform"
                                          autocomplete="on">
                                        @csrf
                                        <div class="form-input">
                                            <label>{{__('lang.fullname')}}<span class="red">*</span></label>
                                            <input type="text" required="required" name="name"
                                                   id="servicesName">
                                        </div>
                                        <div class="form-input">
                                            <label>{{__('lang.email_adress')}}<span class="red">*</span></label>
                                            <input name="email" type="email" id="servicesEmail"
                                                   required="required">
                                        </div>
                                        <div class="form-input">
                                            <label>{{__('lang.phone_number')}}</label>
                                            <input name="phone" type="text" id="servicesPhone">
                                        </div>
                                        <div class="form-input">
                                            <label>{{__('lang.choosen_services')}}</label>
                                            <select name="servicesSelectArea" id="servicesSelectArea">
                                                @isset($QuickServiceList) @foreach ($QuickServiceList as $key => $item)
                                                    <option value="{{$key}}">{{$item['key']}}</option>
                                                @endforeach @endisset
                                            </select>
                                        </div>
                                        <div class="form-input">
                                            <label>{{__('lang.message')}}<span class="red">*</span></label>
                                            <textarea required="required" name="message" cols="40" rows="7"
                                                      id="servicesMessageTxt" spellcheck="true"></textarea>
                                        </div>

                                        <div class="form-input">
                                        <label>{{__('lang.recaptcha')}}<span class="red">*</span></label>
                                        <div class="g-recaptcha" name="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"></div>
                                    </div>


                                        <div class="form-input" style="text-align: center;">
                                            <input type="submit" class="btn btn-large main-bg" value="Gönder">
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
