<li class="widget blog-cat-w fx" data-animate="fadeInLeft">
    <h3 class="widget-head">Bizimle İletişime Geçebilirsiniz</h3>
    <div class="widget-content">
        <ul class="sidebarCallLocation">
            <li><a title="Whatsapp Destek Hattı" href="https://wa.me/@isset($setting['phone']){{$setting['phone']->value }} @endisset"><i
                        class="fa fa-whatsapp fa-2x"></i></a></li>
            <li><a title="Telefonla Ulaşın" href="tel:@isset($setting['phone']) {{ $setting['phone']->value }} @endisset"><i
                        class="fa fa-phone fa-2x"></i></a>
            <li><a title="E-Posta İletişim" href="mailto:{{$setting['email']->value}}"><i
                        class="fa fa-envelope fa-2x"></i></a>
            </li>
        </ul>
    </div>
</li>
