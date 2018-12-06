@extends('layouts.app')
@section('content')

<div class="ms-hero-page ms-hero-img-meeting ms-hero-bg-primary ms-bg-fixed mb-4">
	<div class="container">
	  <div class="text-center">
	    <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">{{ trans('navbar.trainings') }}</h1>
	   {{--  <h3 class="color-white text-upercase text-normal">From
	      <span class="counter color-info">1990</span> to
	      <span class="counter color-warning">2016</span>
	    </h3> --}}
	    <a href="{{ route('blog.index') }}" class="btn btn-warning">
	      <i class="zmdi zmdi-desktop-mac"></i> Olvasmányok</a>
	    <a href="{{ route('pages.about') }}" class="btn btn-info">
	      <i class="zmdi zmdi-accounts"></i>Magamról</a>
	  </div>
	</div>
</div>
<div class="container">
    <div class="row">
      <div class="col-md-8">
          @if(session()->get('success'))
              <div class="alert alert-success">
                  {{ session()->get('success') }}  
              </div><br />
          @endif
          @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
        <ul class="ms-timeline">
            @if(count($trainings) > 0)
          @foreach($trainings as $training)
            <li class="ms-timeline-item wow materialUp">
                <div class="ms-timeline-date">
                    <time class="timeline-time" datetime="">
                        @foreach($training->dates as $date)
                            {{ $date->started_at->format('Y') }}
                            <span>{{ $date->started_at->format('M') }}</span>
                            {{ $date->started_at->format('d') }}.
                        @endforeach
                    </time>
                    <i class="ms-timeline-point bg-info"></i>
                    <div class="card card-info">
                        @if ($training->image_path)
                            <div class="withripple zoom-img">
                                <a href="javascript:void(0);">
                                    <img src="/{{ $training->image_path }}" alt="" class="img-responsive" style="width: 100%;"> </a>
                            </div>
                            <div class="card-block">
                                <h4 class="color-success"><strong>{{ $training->title }}</strong></h4>
                                <p>{!! str_limit($training->description, $limit = 550, $end = '...') !!}</p>

                                <a href="{{ route('trainings.show', $training->slug) }}" class="btn btn-raised btn-success">Tovább</a>
                            </div>
                        @else
                            <div class="card-header">
                                <h3 class="card-title">{{ $training->title }}</h3>
                            </div>
                            <div class="card-block"> 
                                <p>{!! str_limit($training->description, $limit = 550, $end = '...') !!}</p>
                                <div class="pull-right">
                                    <a href="{{ route('trainings.show', $training->slug) }}" class="btn btn-raised btn-info">Tovább</a>
                                </div>
                            </div>
                        @endif
                    </div>
            </li>
        @endforeach
    @else
        <h3>Jelenleg zárt csoportokat és programokat tartok.</h3>
    @endif
        </ul>
                </div>
      <div class="col-md-4">
        <div class="card card-primary-inverse animated zoomInUp animation-delay-7">
          <div class="card-block">
            <div class="text-center mb-2">
              <span class="ms-logo ms-logo-white ms-logo-sm mr-1">S</span>
              <h3 class="no-m ms-site-title">Soltész <span>Szilárd</span>
              </h3>
            </div>
            <address class="no-mb">
              <p>
                <i class="color-danger-light zmdi zmdi-pin mr-1"></i> 6000 Kecskemét, Jégvirág utca 6.</p>
              <p>
                <i class="color-warning-light zmdi zmdi-map mr-1"></i> 1133 Budapest, Cézár Ház</p>
              <p>
                <i class="color-info-light zmdi zmdi-email mr-1"></i>
                <a href="mailto:szilard.soltesz@gmail.com" class="link">szilard.soltesz@gmail.com</a>
              </p>
              <p>
                <i class="color-royal-light zmdi zmdi-phone mr-1"></i>
                <a href="tel:+36302311240" style="color:white;">+36 30 231 1240</a>
              </p>
            </address>
          </div>
        </div>
        <div class="card mt-4 card-info wow zoomInUp animation-delay-7">
          <div class="ms-hero-bg-info ms-hero-img-city">
            <img src="/img/profile-sm.png" alt="..." class="img-avatar-circle"> </div>
          <div class="card-block pt-6 text-center">
            <h3 class="color-info">Soltész Szilárd</h3>
            <p>Szélesre nyílt eddigi életutam folyamatosan formálja a szemléletem, gondolkodásom.</p>
            <a href="{{ route('pages.about') }}" class="btn btn-raised btn-info">Tovább</a>
          </div>
        </div>
      </div>
    </div>
</div>

@stop
