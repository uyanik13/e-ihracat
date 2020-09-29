@php
    $findServiceswithoutId = Helper::findServiceswithoutId();
    $childServices = json_decode($findServiceswithoutId[1]->options,true)['relevantServices'];
@endphp
<!-- Content Start -->
<div id="contentWrapper">
    <div class="page-title title-1">
        <div class="container">
            <div class="row">
                <div class="cell-12">
                    <h1 class="fx" data-animate="fadeInLeft">{{__('lang.online_appointment')}}</h1>
                    <div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
                        <span class="bold">{{__('lang.you_are_here')}}:</span><a href="#">{{__('lang.homepage')}}</a><span
                            class="line-separate">/</span><a href="#">{{__('lang.nav_appointment')}} </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="padd-top-50 e-Appointment">
        <div class="container">
            <div class="row">
                <div class="cell-7 contact-form fx appointmentFormInput" data-animate="fadeInLeft" id="contact">
                    <h3 class="block-head">{{__('lang.appointment_form')}}</h3>
                    <mark id="message"></mark>
                    <form class="form-signin cform" method="post" action="php/contact.php" id="cform"
                        autocomplete="on">
                        <div class="form-input">
                            <label>{{__('lang.fullname')}}<span class="red">*</span></label>
                            <input type="text" required="required" name="appFullName" id="appFullName">
                        </div>
                        <div class="form-input">
                            <label>{{__('lang.email_adress')}}<span class="red">*</span></label>
                            <input name="appEmail" type="email" id="appEmail" required="required">
                        </div>
                        <div class="form-input">
                            <label>{{__('lang.phone_number')}}</label>
                            <input name="appPhoneNumber" type="text" id="appPhoneNumber">
                        </div>
                        <div class="form-input">
                            <label>{{__('lang.requested_services')}}<span class="red">*</span></label>
                            <select id="serviceCategorySelect" name="appServiceSelect" id="appServiceSelect">
                                <option value="default">Hizmet Seçin</option>
                                @foreach ($findServiceswithoutId as $key=> $service)
                            <option value="default{{$key}}">{{$service->title}}</option>
                                @endforeach
                            
                            </select>
                            @foreach ($findServiceswithoutId as $key1=> $service)
                            @php
                            $collection = json_decode($findServiceswithoutId[$key]->options,true)['relevantServices'];
                            @endphp
                            @foreach ($collection as $key=>$item)
                                <select id="default{{$key1}}" name="detailservices">
                                <option value="hukuk1">{{$item->title}}</option>
                            </select>
                            @endforeach
                            @endforeach
                            
                            
                        </div>
                        <div class="form-input">
                            <label>{{__('lang.appointment_date')}}</label>
                            <input placeholder="Tarih Seçiniz" class="textbox-n" type="text"
                                onfocus="(this.type='date')" onblur="(this.type='text')" id="appDate" />
                        </div>
                        <div class="form-input">
                            <label>{{__('lang.appointment_date_hour')}}</label>
                            <select name="appSetHour" id="appSetHour">
                                <option value="appSetHour1">10:00 - 11:00</option>
                                <option value="appSetHour2">11:00 - 12:00</option>
                                <option value="appSetHour3">12:00 - 13:00</option>
                                <option value="appSetHour4">13:00 - 14:00</option>
                                <option value="appSetHour5">15:00 - 16:00</option>
                                <option value="appSetHour6">17:00 - 18:00</option>
                            </select>
                        </div>
                        <div class="form-input">
                            <label>{{__('lang.extra_notes')}}</label>
                            <textarea required="required" name="message" cols="40" rows="7" id="messageTxt"
                                spellcheck="true"></textarea>
                        </div>
                        <div class="form-input">
                            <input type="submit" class="btn btn-large main-bg" value="Gönder">&nbsp;&nbsp;<input
                                type="reset" class="btn btn-large" value="Sıfırla" id="reset">
                        </div>
                    </form>
                </div>
                <div class="cell-5 appointmentDetails">
                    <h3 class="block-head">{{__('lang.appointment_system_info')}}</h3>
                    <p class="fx" data-animate="fadeInRight">
                        {{__('lang.appointment_system_info_desc')}}
                    </p>
                    <h3 class="block-head">{{__('lang.check_our_services')}}</h3>
                    <ul id="accordion" class="accordion">
                                @foreach ($findServiceswithoutId as $service)
                                   <li>
                                   <h3><a href="{{route('service.find',$service->slug)}}"><span><i class="fa fa-flag"></i>{{$service->title}}</span></a>
                                       <div class="accordion-panel">
                                         @php
                                           echo substr($service->content,0,150);
                                           @endphp
                                           </div>
                                    </li>
                                @endforeach

                    </ul>
                    <hr class="hr-style4">
                    <div class="clearfix"></div>
                    <div class="padding-vertical">
                        <div class="fx appointSupportArea" data-animate="fadeInRight">
                            <h4 class="main-color bold">
                                {{__('lang.foot_contact_info')}}
                            </h4>
                            <p>{{__('lang.can_ask_us')}}</p>
                            <h5>{{__('lang.email_adress')}}:</h5>
                            <a href="mailto:destek@eihracatturkiye.com">destek@eihracatturkiye.com</a>
                            <a href="mailto:randevu@eihracatturkiye.com">randevu@eihracatturkiye.com</a>
                            <h5>{{__('lang.phone_number')}}:</h5>
                            <a href="tel:+908503469956">+90 850 346 9956</a>
                            <h5>Whatsapp:</h5>
                            <a class="whatsappButton" href="https://wa.me/908503469956"><i
                                    class="fa fa-whatsapp fa-3x"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->
</div>
