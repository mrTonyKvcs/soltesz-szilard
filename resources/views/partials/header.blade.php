<header class="ms-header ms-header-white">
  <div class="container container-full">
    <div class="ms-title">
      <a href="index.html">
        <!-- <img src="/img/demo/logo-header.png" alt=""> -->
        <span class="ms-logo animated zoomInDown animation-delay-5">M</span>
        <h1 class="animated fadeInRight animation-delay-6">Material
          <span>Style</span>
        </h1>
      </a>
    </div>
    <div class="header-right">
      <div class="share-menu">
        <ul class="share-menu-list">
          <li class="animated fadeInRight animation-delay-3">
            <a href="javascript:void(0)" class="btn-circle btn-google">
              <i class="zmdi zmdi-google"></i>
            </a>
          </li>
          <li class="animated fadeInRight animation-delay-2">
            <a href="javascript:void(0)" class="btn-circle btn-facebook">
              <i class="zmdi zmdi-facebook"></i>
            </a>
          </li>
          <li class="animated fadeInRight animation-delay-1">
            <a href="javascript:void(0)" class="btn-circle btn-twitter">
              <i class="zmdi zmdi-twitter"></i>
            </a>
          </li>
        </ul>
        <a href="javascript:void(0)" class="btn-circle btn-circle-primary animated zoomInDown animation-delay-7">
          <i class="zmdi zmdi-share"></i>
        </a>
      </div>
      <a href="javascript:void(0)" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8" data-toggle="modal" data-target="#ms-account-modal">
        <i class="zmdi zmdi-account"></i>
      </a>
      <form class="search-form animated zoomInDown animation-delay-9">
        <input id="search-box" type="text" class="search-input" placeholder="Search..." name="q" />
        <label for="search-box">
          <i class="zmdi zmdi-search"></i>
        </label>
      </form>
      <a href="javascript:void(0)" class="btn-ms-menu btn-circle btn-circle-primary sb-toggle-left animated zoomInDown animation-delay-10">
        <i class="zmdi zmdi-menu"></i>
      </a>
    </div>
  </div>
</header>
<nav class="navbar navbar-static-top yamm ms-navbar ms-navbar-white">
  <div class="container container-full">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">
        <!-- <img src="/img/demo/logo-navbar.png" alt=""> -->
        <span class="ms-logo ms-logo-sm">M</span>
        <span class="ms-title">Material
          <strong>Style</strong>
        </span>
      </a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li>
          <a href="">{{ trans('navbar.home') }}</a>
        </li>
        <li class="dropdown">
          <a href="javascript:void(0)" class="dropdown-toggle animated fadeIn animation-delay-5" data-toggle="dropdown" data-hover="dropdown" data-name="page">{{ trans('navbar.introduction') }}
            <i class="zmdi zmdi-chevron-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-left animated-2x animated fadeIn">
            <li class="dropdown-submenu">
              <a href="javascript:void(0)" class="has_children">{{ trans('navbar.activity') }}</a>
              <ul class="dropdown-menu dropdown-menu-left">
                <li>
                  <a href="page-about.html">{{ trans('navbar.selfless-coaching')}}</a>
                </li>
                <li>
                  <a href="page-about2.html">{{ trans('navbar.guidance')}}</a>
                </li>
                <li>
                  <a href="page-about3.html">{{ trans('navbar.group-training')}}</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">{{ trans('navbar.motivation') }}</a>
            </li>
            <li>
              <a href="#">{{ trans('navbar.about') }}</a>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle animated fadeIn animation-delay-9" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="ecommerce">{{ trans('navbar.topic') }}
            <i class="zmdi zmdi-chevron-down"></i>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="ecommerce-filters.html">{{ trans('navbar.communication-techniques') }}</a>
            </li>
            <li>
              <a href="ecommerce-filters-full.html">{{ trans('navbar.developing-competencies') }}</a>
            </li>
            <li>
              <a href="ecommerce-filters-full2.html">{{ trans('navbar.stress-sticking') }}</a>
            </li>
            <li>
              <a href="ecommerce-cart.html">{{ trans('navbar.life-crises') }}</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="">{{ trans('navbar.blog') }}</a>
        </li>
        <li>
          <a href="">{{ trans('navbar.traning') }}</a>
        </li>
        <li>
          <a href="">{{ trans('navbar.price') }}</a>
        </li>
        <li>
          <a href="">{{ trans('navbar.contact') }}</a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle animated fadeIn animation-delay-9" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="ecommerce">{{ trans('navbar.language') }}
            <i class="zmdi zmdi-chevron-down"></i>
          </a>
          <ul class="dropdown-menu language_bar_chooser">
              @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                  <li>
                      <a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                          {{ $properties['native'] }}
                      </a>
                  </li>
              @endforeach
          </ul>
        </li>
        <!-- <li class="btn-navbar-menu"><a href="javascript:void(0)" class="sb-toggle-left"><i class="zmdi zmdi-menu"></i></a></li> -->
      </ul>
    </div>
    <!-- navbar-collapse collapse -->
    <a href="javascript:void(0)" class="sb-toggle-left btn-navbar-menu">
      <i class="zmdi zmdi-menu"></i>
    </a>
  </div>
</nav>