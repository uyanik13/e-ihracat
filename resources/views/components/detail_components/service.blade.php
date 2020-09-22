
		<!-- Content Start -->
		<div id="contentWrapper">
			<div class="page-title title-1">
				<div class="container">
					<div class="row">
						<div class="cell-12">
							<h1 class="fx" data-animate="fadeInLeft">E-İhracat <span> Nedir? ve Nasıl Yapılır?</span>
							</h1>
							<div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
								<span class="bold">Buradasınız:</span><a href="#">Anasayfa</a><span
									class="line-separate">/</span><a href="#">Hizmetlerimiz </a><span
									class="line-separate">/</span><span>E-İhracat Nedir? ve Nasıl Yapılır?</span>
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
									<h3 class="widget-head">Hizmetlerimiz</h3>
									<div class="widget-content">
										<ul>
											<li>
												<ul id="accordion2" class="accordion">
													<li>
														<h3><a href="partner-details.blade.php"><span class="bold"
                                                                                                      class="skew25">E-İhracat</span></a>
														</h3>
														<div class="accordion-panel active">
															<a href="our-services-1.html">E-İhracat Nedir?</a>
															<a href="our-services-1.html">E-İhracat Nasıl Yapılır?</a>
															<a href="our-services-1.html">E-İhracat Terimleri</a>
														</div>
													</li>

													<li>
														<h3><a href="partner-details.blade.php"><span class="bold"
                                                                                                      class="skew25">Online Pazar
																	Yerleri</span></a>
														</h3>
														<div class="accordion-panel active">
															<a href="our-services-1.html">Amazon</a>
															<a href="our-services-1.html">Alibaba</a>
															<a href="our-services-1.html">Ebay</a>
															<a href="our-services-1.html">Etsy</a>
														</div>
													</li>

													<li>
														<h3><a href="partner-details.blade.php"><span class="bold"
                                                                                                      class="skew25">Global
																	Pazarlama</span></a>
														</h3>
														<div class="accordion-panel active">
															<a href="our-services-1.html">Global Pazarlama Nedir?</a>
															<a href="our-services-1.html">Global Pazarlama Nasıl
																Yapılır?</a>
															<a href="our-services-1.html">Global Pazarlama
																Stratejileri</a>
														</div>
													</li>

													<li>
														<h3><a href="partner-details.blade.php"><span class="bold"
                                                                                                      class="skew25">E-İhracat</span></a>
														</h3>
														<div class="accordion-panel active">
															<a href="our-services-1.html">E-İhracat Nedir?</a>
															<a href="our-services-1.html">E-İhracat Nasıl Yapılır?</a>
															<a href="our-services-1.html">E-İhracat Terimleri</a>
														</div>
													</li>
												</ul>
											</li>
										</ul>
									</div>
								</li>

								<li class="widget blog-cat-w fx" data-animate="fadeInLeft">
									<h3 class="widget-head">Bizimle İletişime Geçebilirsiniz</h3>
									<div class="widget-content">
										<ul class="sidebarCallLocation">
											<li><a title="Whatsapp Destek Hattı" href="https://wa.me/908503469956"><i
														class="fa fa-whatsapp fa-2x"></i></a></li>
											<li><a title="Telefonla Ulaşın" href="tel:+908503469956"><i
														class="fa fa-phone fa-2x"></i></a>
											<li><a title="E-Posta İletişim" href="mailto:info@eihracatturkiye.com"><i
														class="fa fa-envelope fa-2x"></i></a>
											</li>
										</ul>
									</div>
								</li>

								<li class="widget r-posts-w fx" data-animate="fadeInRight">
									<h3 class="widget-head">Hizmet Bilgi Talep Formu</h3>
									<div class="widget-content">
										<div class="cell-12 contact-form fx" data-animate="fadeInLeft" id="contact">
											<mark id="message"></mark>
											<form class="form-signin cform" method="post" action="php/contact.php"
												id="cform" autocomplete="on">
												<div class="form-input">
													<label>Ad Soyad<span class="red">*</span></label>
													<input type="text" required="required" name="name"
														id="servicesName">
												</div>
												<div class="form-input">
													<label>E-Posta<span class="red">*</span></label>
													<input name="email" type="email" id="servicesEmail"
														required="required">
												</div>
												<div class="form-input">
													<label>Telefon</label>
													<input name="phone" type="text" id="servicesPhone">
												</div>
												<div class="form-input">
													<label>Hizmet Seçimi</label>
													<select name="servicesSelectArea" id="servicesSelectArea">
														<option value="services1">E-İhracat</option>
														<option value="services1">Online Pazar Yerleri</option>
														<option value="services1">Global Pazarlama</option>
													</select>
												</div>
												<div class="form-input">
													<label>Mesaj<span class="red">*</span></label>
													<textarea required="required" name="message" cols="40" rows="7"
														id="servicesMessageTxt" spellcheck="true"></textarea>
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
