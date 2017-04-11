@extends('layouts.app')
@section('content')
<div class="ms-hero ms-hero-material">
        <span class="ms-hero-bg"></span>
        <div class="container">
          <div class="col-lg-12 col-md-12">
            <div id="carousel-hero" class="carousel slide carousel-fade" data-ride="carousel" data-interval="8000">
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <div class="carousel-caption">
                    <div class="ms-hero-material-text-container">
                      <header class="ms-hero-material-title animated slideInLeft animation-delay-5">
                        <h1 class="animated fadeInLeft animation-delay-15 font-smoothing">The
                          <strong>power design</strong> amazing projects</h1>
                        <h2 class="animated fadeInLeft animation-delay-18">The most customizable
                          <span class="color-warning">Lorem ipsum </span> dolor.</h2>
                      </header>
                      <div class="col-lg-11 col-md-11 col-lg-offset-1 col-md-offset-1">
                      <ul class="ms-hero-material-list">
                        <li class="">
                          <div class="ms-list-icon animated zoomInUp animation-delay-18">
                            <span class="ms-icon ms-icon-circle ms-icon-xlg color-warning shadow-3dp">
                              <i class="zmdi zmdi-calendar-note"></i>
                            </span>
                          </div>
                          <div class="ms-list-text animated fadeInRight animation-delay-19">{{ $training->title }}&nbsp;&nbsp;&nbsp;<a href="{{ route('trainings.index') }}">Tovább</a></div>
                        </li>
                        <li class="">
                          <div class="ms-list-icon animated zoomInUp animation-delay-20">
                            <span class="ms-icon ms-icon-circle ms-icon-xlg color-success shadow-3dp">
                              <i class="zmdi zmdi-edit"></i>
                            </span>
                          </div>
                          <div class="ms-list-text animated fadeInRight animation-delay-21">{{ $blog->title }}&nbsp;&nbsp;&nbsp;<a href="{{ route('blog.show', $blog->slug) }}">Tovább</a></div>
                        </li>
                        <li class="">
                          <div class="ms-list-icon animated zoomInUp animation-delay-22">
                            <span class="ms-icon ms-icon-circle ms-icon-xlg color-danger shadow-3dp">
                              <i class="zmdi zmdi-album"></i>
                            </span>
                          </div>
                          <div class="ms-list-text animated fadeInRight animation-delay-23">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit sequi est repudianda.</div>
                        </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-controls">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-4">
        <h2 class="text-center color-primary mb-2 wow fadeInDown animation-delay-4">Szolgaltatasok</h2>
        <p class="lead text-center aco wow fadeInDown animation-delay-5 mw-800 center-block mb-4"> Lorem ipsum dolor sit amet,
          <span class="color-primary">consectetur adipisicing</span> elit. Dolor alias provident excepturi eligendi, nam numquam iusto eum illum, ea quisquam.</p>
        <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-4">
          <div class="text-center card-block">
            <span class="ms-icon ms-icon-circle ms-icon-xxlg color-info">
              <i class="zmdi zmdi-cloud-outline"></i>
            </span>
            <h4 class="color-info">Egyéni coaching /  segítőbeszélgetés</h4>
            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p>
            <a href="javascript:void(0)" class="btn btn-info btn-raised">Action here</a>
          </div>
        </div>
        <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-8">
          <div class="text-center card-block">
            <span class="ms-icon ms-icon-circle ms-icon-xxlg color-warning">
              <i class="zmdi zmdi-desktop-mac"></i>
            </span>
            <h4 class="color-warning">Értékesítés-stratégia tanácsadás</h4>
            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p>
            <a href="javascript:void(0)" class="btn btn-warning btn-raised">Action here</a>
          </div>
        </div>
        <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-10">
          <div class="text-center card-block">
            <span class="ms-icon ms-icon-circle ms-icon-xxlg color-success">
              <i class="zmdi zmdi-download"></i>
            </span>
            <h4 class="color-success">Munkahelyi mentálhigiénés projektek</h4>
            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p>
            <a href="javascript:void(0)" class="btn btn-success btn-raised">Action here</a>
          </div>
        </div>
        <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-6" style="padding-bottom: 18px;">
          <div class="text-center card-block">
            <span class="ms-icon ms-icon-circle ms-icon-xxlg  color-danger">
              <i class="zmdi zmdi-flower-alt"></i>
            </span>
            <h4 class="color-danger">Élménycsoport vezetés</h4>
            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p>
            <a href="javascript:void(0)" class="btn btn-danger btn-raised">Action here</a>
          </div>
        </div>
      </div>
      <!-- container -->
      <div class="wrap wrap-mountain mt-6">
        <div class="container">
          <h2 class="text-center text-light mb-6 wow fadeInDown animation-delay-5">Selfless-coaching</h2>
          <div class="row">
            {{-- <div class="col-md-6 col-md-push-6 mb-4  center-block">
            </div> --}}
            <div class="col-md-12">
              <p class="wow fadeInLeft animation-delay-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam sint officiis odio tempora natus, sed voluptas facilis ullam suscipit. Ducimus quas, eius ut, dolores mollitia sapiente doloremque aliquid sequi eaque.</p>
              <p class="wow fadeInLeft animation-delay-7">Adipisicing elit. Sapiente porro voluptatem rerum modi quibusdam accusantium nihil facere cupiditate quam! Ipsa.</p>
              <p class="wow fadeInLeft animation-delay-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque quasi voluptatem, similique corrupti necessitatibus nihil error, nemo delectus voluptates deserunt ducimus quaerat molestiae labore id repellat exercitationem asperiores neque
                quibusdam.</p>
              <div class="text-center">
                <a href="javascript:void(0)" class="btn btn-warning btn-raised mr-1 wow flipInX animation-delay-14">
                  <i class="zmdi zmdi-chart-donut"></i> Tovább </a>
                {{-- <a href="javascript:void(0)" class="btn btn-info btn-raised wow flipInX animation-delay-16">
                  <i class="zmdi zmdi-case"></i> Button</a> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-6">
        <h1 class="font-light">{{ trans('navbar.topic') }}</h1>
        <p class="lead color-primary">— Intelligent apps that help you do your best work. </p>
        <div class="panel panel-light panel-flat">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs nav-tabs-transparent indicator-primary nav-tabs-full nav-tabs-5" role="tablist">
            <li class="wow fadeInDown animation-delay-6" role="presentation">
              <a href="#communication-techniques" aria-controls="windows" role="tab" data-toggle="tab" class="withoutripple">
                <i class="fa fa-circle" style="color: red;"></i>
                <span class="hidden-xs">{{ trans('navbar.communication-techniques') }}</span>
              </a>
            </li>
            <li class="wow fadeInDown animation-delay-4 active" role="presentation">
              <a href="#developing-competencies" aria-controls="macos" role="tab" data-toggle="tab" class="withoutripple">
                <i class="fa fa-circle" style="color: blue;"></i>
                <span class="hidden-xs">{{ trans('navbar.developing-competencies') }}</span>
              </a>
            </li>
            <li class="wow fadeInDown animation-delay-2" role="presentation">
              <a href="#stress-sticking" aria-controls="linux" role="tab" data-toggle="tab" class="withoutripple">
                <i class="fa fa-circle" style="color: green;"></i>
                <span class="hidden-xs">{{ trans('navbar.stress-sticking') }}</span>
              </a>
            </li>
            <li class="wow fadeInDown animation-delay-4" role="presentation">
              <a href="#life-crises" aria-controls="android" role="tab" data-toggle="tab" class="withoutripple">
                <i class="fa fa-circle" style="color: yellow;"></i>
                <span class="hidden-xs">{{ trans('navbar.life-crises') }}</span>
              </a>
            </li>
            <li class="wow fadeInDown animation-delay-4" role="presentation">
              <a href="#resilience" aria-controls="android" role="tab" data-toggle="tab" class="withoutripple">
                <i class="fa fa-circle" style="color: black;"></i>
                <span class="hidden-xs">{{ trans('navbar.resilience') }}</span>
              </a>
            </li>
          </ul>
          <div class="panel-body">
            <!-- Tab panes -->
            <div class="tab-content mt-4">
              <div role="tabpanel" class="tab-pane fade" id="communication-techniques">
                <div class="row">
                  <div class="col-md-6 col-md-push-6">
                    <img src="/img/topics/asszertív.jpg" alt="" class="img-responsive animated zoomIn animation-delay-8 pull-right"> </div>
                  <div class="col-md-6 col-md-pull-6">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">{{ trans('navbar.communication-techniques') }}</h3>
                    <p class="lead lead-md animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10">
                        <i class="zmdi zmdi-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-chart-donut"></i> Action here </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane active in fade" id="developing-competencies">
                <div class="row">
                  <div class="col-md-6">
                    <img src="/img/topics/vezetői-kompetenciák.jpg" alt="" class="img-responsive wow animated zoomIn animation-delay-8"> </div>
                  <div class="col-md-6">
                    <h3 class="text-normal wow animated fadeInUp animation-delay-4">{{ trans('navbar.developing-competencies') }}</h3>
                    <p class="lead lead-md  wow animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md wow animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised wow animated zoomIn animation-delay-10">
                        <i class="zmdi zmdi-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 wow animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-chart-donut"></i> Action here </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="stress-sticking">
                <div class="row">
                  <div class="col-md-6 col-md-push-6">
                    <img src="/img/topics/stresszben-ragadás.jpg" alt="" class="img-responsive animated zoomIn animation-delay-8"> </div>
                  <div class="col-md-6 col-md-pull-6">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">{{ trans('navbar.stress-sticking') }}</h3>
                    <p class="lead lead-md animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10">
                        <i class="zmdi zmdi-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-chart-donut"></i> Action here </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="life-crises">
                <div class="row">
                  <div class="col-md-6">
                    <img src="/img/topics/életközepi-válság.jpg" alt="" class="img-responsive animated zoomIn animation-delay-8"> </div>
                  <div class="col-md-6">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">{{ trans('navbar.life-crises') }}</h3>
                    <p class="lead lead-md  animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10">
                        <i class="zmdi zmdi-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-chart-donut"></i> Action here </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="resilience">
                <div class="row">
                  <div class="col-md-6 col-md-push-6">
                    <img src="/img/topics/reziliencia.jpg" alt="" class="img-responsive animated zoomIn animation-delay-8"> </div>
                  <div class="col-md-6 col-md-pull-6">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">{{ trans('navbar.resilience') }}</h3>
                    <p class="lead lead-md animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10">
                        <i class="zmdi zmdi-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-chart-donut"></i> Action here </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="resilience">
                <div class="row">
                  <div class="col-md-6 col-md-push-6">
                    <img src="/img/demo/mock3.png" alt="" class="img-responsive animated zoomIn animation-delay-8"> </div>
                  <div class="col-md-6 col-md-pull-6">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Bring ideas together faster</h3>
                    <p class="lead lead-md animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10">
                        <i class="zmdi zmdi-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-chart-donut"></i> Action here </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- panel -->
      </div>
      <!-- container -->
      <div class="wrap wrap-danger mt-6">
        <h2 class="text-center no-m">What our customers say</h2>
        <div id="carousel-example-generic" class="carousel carousel-cards carousel-fade slide" data-ride="carousel" data-interval="7000">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
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
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-3">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="/img/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-4">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="/img/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
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
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-3">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="/img/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-4">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="/img/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
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
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-3">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="/img/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-4">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="/img/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
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
      <div class="container mt-6">
        <h2 class="text-center color-primary mb-4">Our Latest Works</h2>
        <div class="owl-dots"></div>
        <div class="owl-carousel owl-theme">
          <div class="card animation-delay-6">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="/img/demo/port4.jpg" alt="..." class="img-responsive">
              </a>
            </div>
            <div class="card-block">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card card-dark-inverse animation-delay-8">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="/img/demo/port24.jpg" alt="..." class="img-responsive">
              </a>
            </div>
            <div class="card-block">
              <h3 class="">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-info btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-10">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="/img/demo/port7.jpg" alt="..." class="img-responsive">
              </a>
            </div>
            <div class="card-block">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-6">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="/img/demo/port8.jpg" alt="..." class="img-responsive">
              </a>
            </div>
            <div class="card-block">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card card-dark-inverse animation-delay-8">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="/img/demo/port9.jpg" alt="..." class="img-responsive">
              </a>
            </div>
            <div class="card-block">
              <h3 class="">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-info btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-10">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="/img/demo/port5.jpg" alt="..." class="img-responsive">
              </a>
            </div>
            <div class="card-block">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-6">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="/img/demo/port11.jpg" alt="..." class="img-responsive">
              </a>
            </div>
            <div class="card-block">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card card-dark-inverse animation-delay-8">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="/img/demo/port3.jpg" alt="..." class="img-responsive">
              </a>
            </div>
            <div class="card-block">
              <h3 class="">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-info btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-10">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="/img/demo/port14.jpg" alt="..." class="img-responsive">
              </a>
            </div>
            <div class="card-block">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
        </div>
      </div>
@stop