@php
    $images = [
        ['image' => asset('img/clientes/corponet.png'),'link' => 'javascript:void(0)'],
        ['image' => asset('img/clientes/GRUPO-CONSULTORES.png'),'link' => 'https://gconsultores.com.mx/'],
        ['image' => asset('img/clientes/INFORUM.png'),'link' => 'http://www.inforumsol.com/'],
        ['image' => asset('img/clientes/kaitzen.png'),'link' => 'javascript:void(0)'],
        ['image' => asset('img/clientes/PRIZMA-SOFTWARE.png'),'link' => 'javascript:void(0)'],
        ['image' => asset('img/clientes/sap.png'),'link' => 'javascript:void(0)'],
        ['image' => asset('img/clientes/soluone.png'),'link' => 'javascript:void(0)'],
        ['image' => asset('img/clientes/vectium.png'),'link' => 'http://vectiumsureste.com.mx/'],
        ['image' => asset('img/clientes/xamai.png'),'link' => 'javascript:void(0)'],
        ['image' => asset('img/clientes/zpertlink.png'),'link' => 'javascript:void(0)'],
        ['image' => asset('img/clientes/algory.png'),'link' => 'javascript:void(0)'],
        ['image' => asset('img/clientes/sineti.png'),'link' => 'https://sineti.com/'],
        ['image' => asset('img/clientes/sixma.png'),'link' => 'javascript:void(0)'],
        ['image' => asset('img/clientes/b1pro.png'),'link' => 'https://b1pro.com.mx/'],
        ['image' => asset('img/clientes/beelog.png'),'link' => 'javascript:void(0)'],
        ['image' => asset('img/clientes/zentius.png'),'link' => 'https://www.zentius.com/'],
        ['image' => asset('img/clientes/dintec.png'),'link' => 'https://dintec.com/'],
        ['image' => asset('img/clientes/evolve.png'),'link' => 'https://www.evolve-it.com.mx/'],
        ['image' => asset('img/clientes/ework.png'),'link' => 'https://eworkplace.com/'],
        ['image' => asset('img/clientes/ijam.png'),'link' => 'https://www.ijam.com.mx/'],
        ['image' => asset('img/clientes/interlatin.png'),'link' => 'https://interlatin.com.mx /']
       
        
        
];
@endphp

<section>
    <div class="container-fluid carousel-kanan">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">PARTNERS</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <div class="carousel" data-ride="carousel" data-type="multi" data-interval="2000" id="myCarousel">
              <div class="carousel-inner">
                @foreach($images  as $id => $s)
                <div class="item {{ ($id < 1)?'active':'' }}">
                  <div class="col-md-2 col-sm-6 col-xs-12">
                      <a href="{{ $s['link'] }}" @if($s['link'] <> "javascript:void(0)") target="_blank" @endif>
                        <img class="img-responsive" src="{{ $s['image'] }}">
                        </a>
                    </div>
                </div>
                @endforeach
              </div>
              <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
            </div>
            </div>
            </div>
    </div>
</section>
