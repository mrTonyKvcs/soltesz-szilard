@extends('layouts.app')
@section('content')
	<div class="ms-hero-page ms-hero-img-keyboard ms-hero-bg-primary mb-6" align="justify">
        <div class="container">
          <div class="text-center">
            <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Olvasmányok</h1>
          </div>
        </div>
      </div>
	<div class="container">
        <div class="row">
          <div class="col-md-12">
            @foreach($blogs as $blog)
              @if($blog->img_path != null)
              <article class="card card-primary wow zoomInRight animation-delay-5 mb-4">
                <div class="card-block card-block-big">
                  <div class="row">
                    <div class="col-lg-6">
                      <img src="/{{ $blog->img_path }}" alt="" class="img-responsive mb-4"> </div>
                    <div class="col-lg-6 mb-4">
                      <h3 class="no-mt">
                        <a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a>
                      </h3>
                      <p>{!! str_limit(strip_tags($blog->description), 600) !!}</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8">
                      <span class="ml-1 hidden-xs">
                        <i class="zmdi zmdi-time mr-05 color-info "></i>
                        <span class="color-medium-dark">{{ $blog->published_at}}</span>
                      </span>
                    </div>
                    <div class="col-lg-4 pull-right">
                      <a href="{{ route('blog.show', $blog->slug) }}" class="btn btn-primary btn-raised btn-block animate-icon">Olvasd tovább
                        <i class="ml-1 no-mr zmdi zmdi-long-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </article>
              @else
<article class="card card-primary wow zoomInRight animation-delay-5 mb-4">
  <div class="card-block card-block-big">
    <div class="row">
      
      <div class="col-lg-12 mb-4">
        <h3 class="no-mt">
          <a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a>
        </h3>
        <p>{!! str_limit(strip_tags($blog->description), 600) !!}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8">
        <span class="ml-1 hidden-xs">
          <i class="zmdi zmdi-time mr-05 color-info "></i>
          <span class="color-medium-dark">{{ $blog->published_at}}</span>
        </span>
      </div>
      <div class="col-lg-4 pull-right">
        <a href="{{ route('blog.show', $blog->slug) }}" class="btn btn-primary btn-raised btn-block animate-icon">Olvasd
          tovább
          <i class="ml-1 no-mr zmdi zmdi-long-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>
</article>
              @endif

            @endforeach
          </div>
	    </div>
	</div>
@stop
