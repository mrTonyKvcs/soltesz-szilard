@extends('layouts.app')
@section('content')
      <div class="ms-hero ms-hero-material">
        @include('partials.home.slider')
      </div>
      <div class="container mt-4">
        @include('partials.home.services')
      </div>
      <!-- container -->
      <div class="wrap wrap-mountain mt-6">
        @include('partials.home.selfless-coaching')
      </div>
      <div class="container mt-6">
        @include('partials.home.topics')
      </div>
      <!-- container -->
      <div class="wrap wrap-danger mt-6">
        <h2 class="text-center no-m">Inspiráló gondolatok</h2>
        <div id="carousel-example-generic" class="carousel carousel-cards carousel-fade slide" {{-- data-ride="carousel" data-interval="7000" --}}>
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            {{-- <li data-target="#carousel-example-generic" data-slide-to="1"></li> --}}
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <div class="carousel-caption">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-2">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="/img/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>A különös paradoxon az, hogy amikor elfogadom magamat olyannak, amilyen valójában vagyok, azután tudok változni.</p>
                          <footer>Carl Rogers</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-3">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="/img/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>Bizonyosságra törekedni és elfogadni a bizonytalanságot... Kemény prés ez, mégis szorításából született meg minden igaz bölcsesség, ima, művészet.</p>
                          <footer>Pilinszky János</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-4">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="/img/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>A választások kizárják egymást - ez nehezíti meg annyira a döntéshozatalt. Minden igenhez tartozik egy nem. Minden döntésnek ára van, hiszen a többi lehetőségről le kell mondanunk.</p>
                          <footer>Irvin D. Yalom</footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="carousel-caption">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-2">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="/img/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>A nagy fordulat egy ember életében: <br>"nekem mi jut?" helyett: "mi fakad belőlem?"<br>S ez elég ahhoz, hogy a bentről-fakadó<br> fényes legyen és folyton tisztuló. </p>
                          <footer>Weöres Sándor</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="card animated flipInX animation-delay-3">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="/img/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>„Az lehet erőt adó, ha rádöbbenünk, akármilyen szegények, betegek vagy öregek vagyunk, micsoda óriási kincs van a birtokunkban a tiszta tudatunk és értelmi képességeink révén. Még együtt vagyunk a világgal, és szellemi erőink révén még alakíthatjuk magunkat és kapcsolatainkat. Ez a perspektívaváltás gyógyír lehet a lehangolódás, a depresszió ellen. A remény záloga lehet, hogy ami bánt bennünket, az még megváltoz/tat/hat/ó.</p>
                          <footer>Buda Béla</footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Controls -->
          <a class="left carousel-control btn btn-white btn-raised" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="zmdi zmdi-arrow-left"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control btn btn-white btn-raised" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="zmdi zmdi-arrow-right"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
     {{-- <div class="container mt-6">--}}
        {{--<h2 class="text-center color-primary mb-4">Olvasmányok</h2>--}}
        {{--<div class="owl-carousel owl-theme">--}}
          {{--<div class="card animation-delay-6">--}}
            {{--<div class="withripple zoom-img">--}}
              {{--<a href="javascript:void()">--}}
                {{--<img src="/img/demo/port4.jpg" alt="..." class="img-responsive">--}}
              {{--</a>--}}
            {{--</div>--}}
            {{--<div class="card-block">--}}
              {{--<h3 class="color-primary">Thumbnail label</h3>--}}
              {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>--}}
              {{--<p class="text-right">--}}
                {{--<a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">--}}
                  {{--<i class="zmdi zmdi-collection-image-o"></i> View More</a>--}}
              {{--</p>--}}
            {{--</div>--}}
          {{--</div>--}}
                                           
        {{--</div>--}}
      {{--</div>--}}
@stop
