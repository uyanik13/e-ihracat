@php
    $findServiceswithoutId = Helper::findServiceswithoutId();
@endphp
<!-- Content Start -->
<div id="contentWrapper">
    <div class="page-title title-1">
        <div class="container">
            <div class="row">
                <div class="cell-12">
                    <h1 class="fx" data-animate="fadeInLeft">Online <span>Randevu</span></h1>
                    <div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
                        <span class="bold">Buradasınız:</span><a href="#">Anasayfa</a><span
                            class="line-separate">/</span><a href="#">Randevu </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="padd-top-50 e-Appointment">
        <div class="container">
            <div class="row">
                <div class="cell-7 contact-form fx appointmentFormInput" data-animate="fadeInLeft" id="contact">
                    <h3 class="block-head">Randevu Formu</h3>
                    <mark id="message"></mark>
                    <form class="form-signin cform" method="post" action="php/contact.php" id="cform"
                        autocomplete="on">
                        <div class="form-input">
                            <label>Ad Soyad<span class="red">*</span></label>
                            <input type="text" required="required" name="appFullName" id="appFullName">
                        </div>
                        <div class="form-input">
                            <label>E-Posta Adresi<span class="red">*</span></label>
                            <input name="appEmail" type="email" id="appEmail" required="required">
                        </div>
                        <div class="form-input">
                            <label>Telefon Numarası</label>
                            <input name="appPhoneNumber" type="text" id="appPhoneNumber">
                        </div>
                        <div class="form-input">
                            <label>Almak İstediğiniz Hizmet<span class="red">*</span></label>
                            <select id="serviceCategorySelect" name="appServiceSelect" id="appServiceSelect">
                                <option value="default">Hizmet Seçin</option>
                                <option value="appService1">Hukuk & Lojistik</option>
                                <option value="appService2">Ulusal Pazaryerleri</option>
                                <option value="appService3">Uluslararası Pazaryerleri </option>
                            </select>
                            <select id="hukuklojistik" name="detailservices">
                                <option value="hukuk1">Hukuk 1. Hizmet</option>
                                <option value="hukuk2">Hukuk 2. Hizmet</option>
                                <option value="hukuk3">Hukuk 3. Hizmet</option>
                            </select>
                            <select id="ulusal" name="detailservices">
                                <option value="ulusal1">Ulusal 1. Hizmet</option>
                                <option value="ulusal2">Ulusal 2. Hizmet</option>
                                <option value="ulusal3">Ulusal 3. Hizmet</option>
                            </select>
                            <select id="uluslararası" name="detailservices">
                                <option value="uluslararası1">Uluslararası 1. Hizmet</option>
                                <option value="uluslararası2">Uluslararası 2. Hizmet</option>
                                <option value="uluslararası3">Uluslararası 3. Hizmet</option>
                            </select>
                        </div>
                        <div class="form-input">
                            <label>Randevu Tarihi</label>
                            <input placeholder="Tarih Seçiniz" class="textbox-n" type="text"
                                onfocus="(this.type='date')" onblur="(this.type='text')" id="appDate" />
                        </div>
                        <div class="form-input">
                            <label>Randevu Saati</label>
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
                            <label>Eklemek İstedikleriniz</label>
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
                    <h3 class="block-head">E-İhracat Online Randevu Sistemi</h3>
                    <p class="fx" data-animate="fadeInRight">
                        Hizmetlerimizden faydalanmak ve faaliyetlerimiz hakkında detaylı bilgi almak için
                        randevu oluşturabilirsiniz. Randevu oluşturulduğunda, randevu bilgileriniz barındıran
                        bir e-posta ile bilgilendirileceksiniz.
                    </p>
                    <h3 class="block-head">Hizmetlerimize Göz Atın</h3>
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
                                İletişim Bilgileri
                            </h4>
                            <p> Herhangi bir yardıma ihtiyacınız olursa canlı
                                destek, whatsapp ya da e-posta üzerinden bizden yardım alabilirsiniz.</p>
                            <h5>E-Posta:</h5>
                            <a href="mailto:destek@eihracatturkiye.com">destek@eihracatturkiye.com</a>
                            <a href="mailto:randevu@eihracatturkiye.com">randevu@eihracatturkiye.com</a>
                            <h5>Telefon:</h5>
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
