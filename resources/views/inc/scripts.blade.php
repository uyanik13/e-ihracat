

@include('sweetalert::alert')

@stack('inline-scripts')

<!-- Load JS siles -->
<script type="text/javascript" src="{{asset('theme/js/jquery.min.js')}}"></script>

<!-- Waypoints script -->
<script type="text/javascript" src="{{asset('theme/js/waypoints.min.js')}}"></script>

<!-- SLIDER REVOLUTION SCRIPTS  -->
<script type="text/javascript" src="{{asset('theme/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- Animate numbers increment -->
<script type="text/javascript" src="{{asset('theme/js/jquery.animateNumber.min.js')}}"></script>

<!-- slick slider carousel -->
<script type="text/javascript" src="{{asset('theme/js/slick.min.js')}}"></script>

<!-- Animate numbers increment -->
<script type="text/javascript" src="{{asset('theme/js/jquery.easypiechart.min.js')}}"></script>

<!-- PrettyPhoto script -->
<script type="text/javascript" src="{{asset('theme/js/jquery.prettyPhoto.js')}}"></script>

<!-- Share post plugin script -->
<script type="text/javascript" src="{{asset('theme/js/jquery.sharrre.min.js')}}"></script>

<!-- Product images zoom plugin -->
<script type="text/javascript" src="{{asset('theme/js/jquery.elevateZoom-3.0.8.min.js')}}"></script>

<!-- Input placeholder plugin -->
<script type="text/javascript" src="{{asset('theme/js/jquery.placeholder.js')}}"></script>

<!-- Tweeter API plugin -->
{{-- <script type="text/javascript" src="{{asset('theme/js/twitterfeed.js')}}"></script> --}}

<!-- Flickr API plugin -->
<script type="text/javascript" src="{{asset('theme/js/jflickrfeed.min.js')}}"></script>

<!-- MailChimp plugin -->
<script type="text/javascript" src="{{asset('theme/js/mailChimp.js')}}"></script>

<!-- NiceScroll plugin -->
<script type="text/javascript" src="{{asset('theme/js/jquery.nicescroll.min.js')}}"></script>

<!-- general script file -->
<script type="text/javascript" src="{{asset('theme/js/script.js')}}"></script>

<script src="{{asset('assets/js/custom.js')}}"></script>

<script type="text/javascript" src="https://paracevirici.com/servis/widget/widget.js"></script>

<script type="text/javascript">

    $(function(){
    typeof $.fn.paraceviriciWidget == "function" && 
    $("#W3179").paraceviriciWidget({
        widget:"list",
        wData:{
            category:0,
            currency:"USD-EUR-GBP-CHF-CNY-JPY-SAR-NOK-DKK-AUD-CAD-SEK-KWD-IRR-RUB-AFN-AOA-ARS-ALL-AWG"
        },
        wSize:{
            wWidth:600,
            wHeight:300
        },
        wContent: {
            cFlag: 2
        }
    });
    });
    
    </script>





</body>

</html>
