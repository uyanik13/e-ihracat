
		<!-- Content Start -->
		<div id="contentWrapper">
			<div class="page-title title-1">
				<div class="container">
					<div class="row">
						<div class="cell-12">
							<h1 class="fx" data-animate="fadeInLeft">{{__('lang.contact')}}</h1>
							<div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
								<span class="bold">{{__('lang.you_are_in')}}:</span><a href="#">{{__('lang.homepage')}}</a><span
									class="line-separate">/</span><a href="#">{{__('lang.contact')}} </a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="padd-top-50">
				<div class="container">
					<div class="row">
						<div class="cell-7 contact-form fx" data-animate="fadeInLeft" id="contact">
							<h3 class="block-head">{{__('lang.keep_contact_us')}}</h3>
							<mark id="message"></mark>
							<form class="form-signin cform" method="post" action="{{route('contact.form')}}" id="cform"
								autocomplete="on">
                                @csrf
								<div class="form-input">
									<label>{{__('lang.name')}}<span class="red">*</span></label>
									<input type="text" required="required" name="name" id="name">
								</div>
								<div class="form-input">
									<label>{{__('lang.email')}}<span class="red">*</span></label>
									<input name="email" type="email" id="email" required="required">
								</div>
								<div class="form-input">
									<label>{{__('lang.phone')}}</label>
									<input name="phone" type="text" id="phone">
								</div>
								<div class="form-input">
									<label>{{__('lang.message')}}<span class="red">*</span></label>
									<textarea required="required" name="message" cols="40" rows="7" id="messageTxt"
										spellcheck="true"></textarea>
								</div>
								<div class="form-input">
									<input type="submit" class="btn btn-large main-bg" value="{{__('lang.send')}}">&nbsp;&nbsp;<input
										type="reset" class="btn btn-large" value="{{__('lang.reset')}}" id="reset">
								</div>
							</form>
						</div>
						<div class="cell-5 contact-detalis">
							<h3 class="block-head">{{__('lang.contact_info_title')}}</h3>
							<p class="fx" data-animate="fadeInRight">
                                {{__('lang.contact_info_title_under_text')}}
							</p>
							<hr class="hr-style4">
							<div class="clearfix"></div>
							<div class="padding-vertical contactPageElements">
								<div class="cell-12 fx" data-animate="fadeInRight">
									<h4 class="main-color bold">{{__('lang.center')}}: İstanbul</h4>
									<h5 class="bold">{{__('lang.address')}}</h5>
                                    @isset($setting['address'])<p> {{ $setting['address']->value }} </p>@endisset
									<h5 class="bold">{{__('lang.email')}}:</h5>
									<p>@isset($setting['email']) <a href="mailto:{{ $setting['email']->value }}"> {{ $setting['email']->value }} </a> @endisset</p>
									<h5 class="bold">{{__('lang.phone')}}:</h5>
									<p>@isset($setting['phone'])<a href="tel: {{ $setting['phone']->value }} ">  {{ $setting['phone']->value }} </a> @endisset</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="padd-vertical-45">
				<div class="container" id="map_canvas">
					@isset($setting['map_iframe']) {!! $setting['map_iframe']->value !!} @endisset
				</div>
			</div>
		</div>
