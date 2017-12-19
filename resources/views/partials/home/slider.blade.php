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
                <h1 class="animated fadeInLeft animation-delay-15 font-smoothing">Selfness Coaching</h1>
                <h2 class="animated fadeInLeft animation-delay-18"><span class="color-warning">“Tanulj meg  
                  történetedből olvasni”</span> </h2>
              </header>
              <div class="col-lg-11 col-md-11 col-lg-offset-1 col-md-offset-1">
              <ul class="ms-hero-material-list">
                <li class="">
                  <div class="ms-list-icon animated zoomInUp animation-delay-18">
                    <span class="ms-icon ms-icon-circle ms-icon-xlg color-blue shadow-3dp">
                      <i class="zmdi zmdi-calendar-note"></i>
                    </span>
                  </div>
                  <div class="ms-list-text animated fadeInRight animation-delay-19"><strong>Események: </strong>{{ $training->title }}&nbsp;&nbsp;&nbsp;<a href="{{ route('trainings.show',$training->slug) }}">Tovább</a></div>
                </li>
                @if (  $blog )
                  <li class="">
                    <div class="ms-list-icon animated zoomInUp animation-delay-20">
                      <span class="ms-icon ms-icon-circle ms-icon-xlg color-blue shadow-3dp">
                        <i class="zmdi zmdi-edit"></i>
                      </span>
                    </div>
                    <div class="ms-list-text animated fadeInRight animation-delay-21">
                      <strong>Olvasmányok: </strong>{{ $blog->title }}&nbsp;&nbsp;&nbsp;
                      <a href="{{ route('blog.show', $blog->slug) }}">Tovább</a>
                    </div>
                  </li>
                @endif
                <li class="">
                  <div class="ms-list-icon animated zoomInUp animation-delay-22">
                    <span class="ms-icon ms-icon-circle ms-icon-xlg color-blue shadow-3dp">
                      <i class="zmdi zmdi-album"></i>
                    </span>
                  </div>
                  <div class="ms-list-text animated fadeInRight animation-delay-23"><strong>Kiemelt témáim: </strong>{{ $theme['title'] }}&nbsp;&nbsp;&nbsp;<a href="{{ route($theme['url']) }}">Tovább</a></div>
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
