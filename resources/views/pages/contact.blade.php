﻿
		<!-- Content Start -->
		<div id="contentWrapper">
			<div class="page-title title-1">
				<div class="container">
					<div class="row">
						<div class="cell-12">
							<h1 class="fx" data-animate="fadeInLeft">İletişim</h1>
							<div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
								<span class="bold">You Are In:</span><a href="#">Anasayfa</a><span
									class="line-separate">/</span><a href="#">İletişim </a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="padd-top-50">
				<div class="container">
					<div class="row">
						<div class="cell-7 contact-form fx" data-animate="fadeInLeft" id="contact">
							<h3 class="block-head">{{__('contact.keep_contact_us')}}</h3>
							<mark id="message"></mark>
							<form class="form-signin cform" method="post" action="{{route('contact.form')}}" id="cform"
								autocomplete="on">
                                @csrf
								<div class="form-input">
									<label>{{__('contact.name')}}<span class="red">*</span></label>
									<input type="text" required="required" name="name" id="name">
								</div>
								<div class="form-input">
									<label>{{__('contact.email')}}<span class="red">*</span></label>
									<input name="email" type="email" id="email" required="required">
								</div>
								<div class="form-input">
									<label>{{__('contact.phone')}}</label>
									<input name="phone" type="text" id="phone">
								</div>
								<div class="form-input">
									<label>{{__('contact.message')}}<span class="red">*</span></label>
									<textarea required="required" name="message" cols="40" rows="7" id="messageTxt"
										spellcheck="true"></textarea>
								</div>
								<div class="form-input">
									<input type="submit" class="btn btn-large main-bg" value="{{__('contact.send')}}">&nbsp;&nbsp;<input
										type="reset" class="btn btn-large" value="{{__('contact.reset')}}" id="reset">
								</div>
							</form>
						</div>
						<div class="cell-5 contact-detalis">
							<h3 class="block-head">{{__('contact.contact_info_title')}}</h3>
							<p class="fx" data-animate="fadeInRight">
                                {{__('contact.contact_info_title_under_text')}}
							</p>
							<hr class="hr-style4">
							<div class="clearfix"></div>
							<div class="padding-vertical contactPageElements">
								<div class="cell-12 fx" data-animate="fadeInRight">
									<h4 class="main-color bold">Merkez: İstanbul</h4>
									<h5 class="bold">{{__('contact.address')}}</h5>
									<p>@isset($setting['address']) {{ $setting['address']->value }} @endisset</p>
									<h5 class="bold">{{__('contact.email')}}:</h5>
									<p><a href="mailto:info@eihracatturkiye.com">@isset($setting['email']) {{ $setting['email']->value }} @endisset</a></p>
									<h5 class="bold">{{__('contact.phone')}}:</h5>
									<p><a href="tel:@isset($setting['phone']) {{ $setting['phone']->value }} @endisset"> @isset($setting['phone']) {{ $setting['phone']->value }} @endisset</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="padd-vertical-45">
				<div class="container">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3008.866381217651!2d28.98432115035654!3d41.050051024701574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab7128a8094c9%3A0xbfedbcf5d5abbc67!2zRXJnZW5la29uLCBLYXlhIEhhdHVuIFNrLiBObzo2MywgMzQzNzMgxZ5pxZ9saS_EsHN0YW5idWw!5e0!3m2!1str!2str!4v1599831601642!5m2!1str!2str"
						width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""
						aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
		</div>
	<!-- Content End -->
