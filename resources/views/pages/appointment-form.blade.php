@php
    $findServiceswithoutId = Helper::findServiceswithoutId();
@endphp
<!-- Content Start -->
<div id="contentWrapper">
    <div class="page-title title-1">
        <div class="container">
            <div class="row">
                <div class="cell-12">
                    <h1 class="fx" data-animate="fadeInLeft">{{__('lang.online_appointment')}}</h1>
                    <div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
                        <span class="bold">{{__('lang.you_are_here')}}:</span><a
                            href="#">{{__('lang.homepage')}}</a><span
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
                    <form class="form-signin cform" method="post" action="{{route('contact.form')}}" id="cform"
                          autocomplete="on">
                        @csrf
                        <div class="form-input">
                            <label>{{__('lang.fullname')}}<span class="red">*</span></label>
                            <input type="text" required="required" name="name" id="appFullName">
                        </div>
                        <div class="form-input">
                            <label>{{__('lang.email_adress')}}<span class="red">*</span></label>
                            <input name="email" type="email" id="appEmail" required="required">
                        </div>
                        <div class="form-input">
                            <label>{{__('lang.phone_number')}}</label>
                            <input name="phone" type="text" id="appPhoneNumber">
                        </div>
                        <div class="form-input">
                            <label>{{__('lang.requested_services')}}<span class="red">*</span></label>
                            <select id="serviceCategorySelect" name="appServiceSelect" onchange="myFunction()"
                                    id="appServiceSelect">
                                <option value="default">Hizmet Seçin</option>
                                @foreach ($findServiceswithoutId as $key=> $service)
                                    <option value="{{$service->id}}">{{$service->title}}</option>
                                @endforeach
                            </select>
                            <br><br><br>
                            <select id="childServices" style=" display: none" name="detailservices">
                            </select>
                        </div>
                        <script>
                            function myFunction (token) {
                                var x = document.getElementById('serviceCategorySelect').value
                                const target = document.getElementById('childServices')
                                $.ajax({
                                    url: '/ajax/get-service',
                                    method: 'get',
                                    data: {id: x}
                                }).done(function (response) {
                                    let element = ''
                                    for (let i = 0; i < response.data.length; i++) {
                                        target.style.display = 'block'
                                        element += '<option value="' + response.data[i].title + '">' + response.data[i].title + '</option>'
                                    }
                                    target.innerHTML = ''
                                    target.innerHTML = element
                                })
                            }
                        </script>
                        <div class="form-input">
                            <label>{{__('lang.appointment_date')}}</label>
                            <input placeholder="Tarih Seçiniz" name="date" class="textbox-n" type="text"
                                   onfocus="(this.type='date')" onblur="(this.type='text')" id="appDate"/>
                        </div>
                        <div class="form-input">
                            <label>{{__('lang.appointment_date_hour')}}</label>
                            <select name="appSetHour" id="appSetHour">
                                <option value="10:00 - 11:00">10:00 - 11:00</option>
                                <option value="11:00 - 12:00">11:00 - 12:00</option>
                                <option value="12:00 - 13:00">12:00 - 13:00</option>
                                <option value="13:00 - 14:00">13:00 - 14:00</option>
                                <option value="15:00 - 16:00">15:00 - 16:00</option>
                                <option value="17:00 - 18:00">17:00 - 18:00</option>
                            </select>
                        </div>
                        <div class="form-input">

                            <label>{{__('lang.extra_notes')}}</label>

                            <textarea required="required" name="message" cols="40" rows="7" id="messageTxt"
                                      spellcheck="true"></textarea>
                        </div>

                        <div class="form-input">
                                    <label>{{__('lang.recaptcha')}}<span class="red">*</span></label>

									 <div class="g-recaptcha" name="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"></div>
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
                        @isset($findServiceswithoutId)
                            @foreach($findServiceswithoutId as $services)
                                <li>
                                    <h3><a href="#"><span><i class="fa fa-flag"></i>{{$services->title}}</span></a>
                                    </h3>
                                    <div class="accordion-panel">
                                        {!! substr($services->content,0,150) !!}
                                    </div>
                                </li>
                            @endforeach
                        @endisset

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
