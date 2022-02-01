<!-- Header -->
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>
<header>
    <div class="efect" style="background:url({{ $image }}) no-repeat center center fixed; background-size:cover"></div>
    <div class="container" id="maincontent" tabindex="-1">
        <div class="row">
            <div class="col-md-6">
               <h1 class="titulares">{!! $titulo !!}</h1>
                @if(isset($subtitulo))
                <p class="sub2 text-left">
                    {!! $subtitulo !!}
                </p>
                @endif
                <li class="enlinea">
                    <a href="#" data-toggle="modal" data-target="#myModal">
                        <img src="{{ asset('img/demo.png') }}" class="img-responsive imas xa" alt="">
                    </a>
                </li>
                <li class="enlinea">
                    <a href="http://addonkananfleet.etecno.com.mx/" target="blank">
                        <img src="{{ asset('img/add.png') }}" class="img-responsive imas xa" alt="">
                    </a>
                </li>
            </div>
            @if(isset($image_right))
            <div class="col-md-6">
                <img src="{{ $image_right }}" class="img-responsive center-block @if(isset($style)) imaabs-banner @else imaabs @endif" alt="">
            </div>
            @endif
        </div>
    </div>
</header>
