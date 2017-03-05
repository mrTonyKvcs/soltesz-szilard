@extends('layouts.app')
@section('content')

<div class="ms-hero-page ms-hero-img-meeting ms-hero-bg-primary ms-bg-fixed mb-4">
	<div class="container">
	  <div class="text-center">
	    <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">{{ trans('navbar.trainings') }}</h1>
	    <p class="lead lead-lg color-light text-center center-block mt-2 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">Do you need a boost in your project?
	      <br>Contact us we will help you to finish your dream.</p>
	    <h3 class="color-white text-upercase text-normal">From
	      <span class="counter color-info">1990</span> to
	      <span class="counter color-warning">2016</span>
	    </h3>
	    <a href="javascript:void(0)" class="btn btn-warning">
	      <i class="zmdi zmdi-desktop-mac"></i> View Projects</a>
	    <a href="javascript:void(0)" class="btn btn-info">
	      <i class="zmdi zmdi-accounts"></i> About Us</a>
	  </div>
	</div>
</div>
<div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="ms-timeline">
          @foreach($trainings as $training)
            @if($training->images_path == "" && $training->video_path != "")
              <li class="ms-timeline-item wow materialUp">
                <div class="ms-timeline-date">
                  <time class="timeline-time" datetime="">{{ $training->getYear($training->started_at) }}
                    <span>{{ $training->getMonth($training->started_at) }}</span>
                    {{ $training->getDay($training->started_at) }}.
                  </time>
                  <i class="ms-timeline-point bg-info"></i>
                <div class="card card-info">
                  <div class="card-header">
                    <h3 class="card-title">{{ $training->title }}</h3>
                  </div>
                  <div data-type="youtube" data-video-id="9ZfN87gSjvI"></div>
                </div>
              </li>
            @elseif($training->images_path != "" && $training->video_path == "")
              <li class="ms-timeline-item wow materialUp">
                <div class="ms-timeline-date">
                  <time class="timeline-time" datetime="">{{ $training->getYear($training->started_at) }}
                    <span>{{ $training->getMonth($training->started_at) }}</span>
                    {{ $training->getDay($training->started_at) }}.
                  </time>
                  <i class="ms-timeline-point bg-success"></i>
                <div class="card">
                  <div class="withripple zoom-img">
                    <a href="javascript:void(0);">
                      <img src="{{ $training->images_path }}" alt="" class="img-responsive"> </a>
                  </div>
                  <div class="card-block">
                    <h4 class="color-success"><strong>{{ $training->title }}</strong></h4>
                    <p>{{ $training->description }}</p>
                  </div>
                </div>
              </li>
            @else
              <li class="ms-timeline-item wow materialUp">
                <div class="ms-timeline-date">
                  <time class="timeline-time" datetime="">{{ $training->getYear($training->started_at) }}
                    <span>{{ $training->getMonth($training->started_at) }}</span>
                    {{ $training->getDay($training->started_at) }}.
                  </time>
                  <i class="ms-timeline-point"></i>
                </div>
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">{{ $training->title }}</h3>
                  </div>
                  <div class="card-block"> {{ $training->description }}</div>
                </div>
              </li>
            @endif
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
        <div class="card card-danger-inverse text-center animated zoomInUp animation-delay-7">
          <div class="card-block">
            <h2 class="">
              <span class="counter">4865</span>
            </h2>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-white btn-circle-danger btn-circle-lg">
              <i class="zmdi zmdi-favorite"></i>
              <div class="ripple-container"></div>
            </a>
            <h4 class="">Happy Customers</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="card mt-4 card-info wow zoomInUp animation-delay-7">
          <div class="ms-hero-bg-info ms-hero-img-city">
            <img src="/img/demo/avatar2.jpg" alt="..." class="img-avatar-circle"> </div>
          <div class="card-block pt-6 text-center">
            <h3 class="color-info">Charlie Durant</h3>
            <p>Lorem ipsum dolor sit amet, consectetur alter adipisicing elit. Facilis, natuse inse voluptates officia repudiandae beatae magni es magnam autem molestias.</p>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook">
              <i class="zmdi zmdi-facebook"></i>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter">
              <i class="zmdi zmdi-twitter"></i>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram">
              <i class="zmdi zmdi-instagram"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
</div>

@stop