﻿

@if ($category === 'benim-ulkem')
<link rel="stylesheet" href="{{asset('theme/css/app.css')}}">
@endif


		<!-- Content Start -->
		<div id="contentWrapper">

            <div id="exportCountry" style="background: url({{asset('theme/images/export-bg.jpg')}}) center center no-repeat; background-color: #d7d7d7d6; background-blend-mode: overlay;">


                <bilgi-bankasi-layout></bilgi-bankasi-layout>


			</div>
		</div>
@if ($category === 'benim-ulkem')
    <script type="text/javascript" src="{{asset('theme/js/app.js')}}"></script>
@endif
