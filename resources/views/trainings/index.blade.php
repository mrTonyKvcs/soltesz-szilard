@extends('layouts.app')
@section('content')

<div class="ms-hero-page ms-hero-img-meeting ms-hero-bg-primary ms-bg-fixed mb-4">
	<div class="container">
	  <div class="text-center">
	    <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">{{ trans('navbar.trainings') }}</h1>
	    <p class="lead lead-lg color-light text-center center-block mt-2 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">Do you need a boost in your project?
	      <br>Contact us we will help you to finish your dream.</p>
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
        <ul class="ms-timeline">
          @foreach($trainings as $training)
            <li class="ms-timeline-item wow materialUp">
               <div class="ms-timeline-date">
                <time class="timeline-time" datetime="">
                  {{ $training->started_at->format('Y') }}
                  <span>{{ $training->started_at->format('M') }}</span>
                  {{ $training->started_at->format('d') }}.
                </time>
                <i class="ms-timeline-point bg-info"></i>
                <div class="card card-info">
                  @if ($training->video_path)
                    <div class="card-header">
                      <h3 class="card-title">{{ $training->title }}</h3>
                    </div>
                    <div data-type="youtube" data-video-id="{{ $training->video_path }}"></div>
                  @elseif ($training->images_path)
                    <div class="withripple zoom-img">
                        <a href="javascript:void(0);">
                          <img src="/{{ $training->images_path }}" alt="" class="img-responsive"> </a>
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
         </ul>
      </div>
      <div class="col-md-4">
        <div class="card card-primary-inverse animated zoomInUp animation-delay-7">
          <div class="card-block">
            <div class="text-center mb-2">
              <span class="ms-logo ms-logo-white ms-logo-sm mr-1">S</span>
              <h3 class="no-m ms-site-title">Soltesz
                <span>Szilard</span>
              </h3>
            </div>
            <address class="no-mb">
              <p>
                <i class="color-danger-light zmdi zmdi-pin mr-1"></i> 795 Folsom Ave, Suite 600</p>
              <p>
                <i class="color-warning-light zmdi zmdi-map mr-1"></i> San Francisco, CA 94107</p>
              <p>
                <i class="color-info-light zmdi zmdi-email mr-1"></i>
                <a href="mailto:joe@example.com" class="link">example@domain.com</a>
              </p>
              <p>
                <i class="color-royal-light zmdi zmdi-phone mr-1"></i>+34 123 456 7890 </p>
              <p>
                <i class="color-success-light fa fa-fax mr-1"></i>+34 123 456 7890 </p>
            </address>
          </div>
        </div>
        <div class="card mt-4 card-info wow zoomInUp animation-delay-7">
          <div class="ms-hero-bg-info ms-hero-img-city">
            <img src="/img/profile-sm.png" alt="..." class="img-avatar-circle"> </div>
          <div class="card-block pt-6 text-center">
            <h3 class="color-info">Soltész Szilárd</h3>
            <p>Az elmúlt 20 év szakmai tevékenységeim során több száz üzletkötővel, vezetővel dolgoztam közvetlenül.</p>
            <a href="{{ route('pages.about') }}" class="btn btn-raised btn-info">Tovább</a>
          </div>
        </div>
      </div>
    </div>
</div>

@stop