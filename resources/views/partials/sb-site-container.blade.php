<div class="ms-slidebar sb-slidebar sb-left sb-momentum-scrolling sb-style-overlay">
  <header class="ms-slidebar-header">
    {{-- <div class="ms-slidebar-login">
      <a href="javascript:void(0)" class="withripple">
        <i class="zmdi zmdi-account"></i> Login</a>
      <a href="javascript:void(0)" class="withripple">
        <i class="zmdi zmdi-account-add"></i> Register</a>
    </div> --}}
    <div class="ms-slidebar-title">
      {{-- <form class="search-form">
        <input id="search-box-slidebar" type="text" class="search-input" placeholder="Search..." name="q" />
        <label for="search-box-slidebar">
          <i class="zmdi zmdi-search"></i>
        </label>
      </form> --}}
      <div class="ms-slidebar-t">
        <span class="ms-logo ms-logo-sm">Sz</span>
        <h3>Soltesz
          <span>Szilard</span>
        </h3>
      </div>
    </div>
  </header>
  <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
    <li>
      <a class="link" href="{{ route('pages.home') }}">
        <i class="zmdi zmdi-home"></i> {{ trans('navbar.home') }}</a>
    </li>
    <li>
      <a class="link" href="{{ route('pages.about') }}">
        <i class="zmdi zmdi-face"></i>Magamról</a>
    </li>
    <li>
      <a class="link" href="{{ route('pages.selfless-coaching') }}"><i class="zmdi zmdi-run"></i>Segítői alapvetés</a>
    </li>
    {{-- <li>
      <a class="link" href="{{ route('pages.organization') }}"><i class="zmdi zmdi-run"></i>Szervezet-és munkalélektan</a>
    </li> --}}
    <li>
      <a class="link" href="{{ route('blog.index') }}">
        <i class="zmdi zmdi-edit"></i> {{ trans('navbar.blog') }}</a>
    </li>
    <li>
      <a class="link" href="{{ route('trainings.index') }}">
        <i class="zmdi zmdi-calendar-note"></i> {{ trans('navbar.trainings') }}</a>
    </li>
    <li>
      <a class="link" href="{{ route('pages.contact') }}">
        <i class="zmdi zmdi-email"></i> {{ trans('navbar.contact') }}</a>
    </li>
  </ul>
  <div class="ms-slidebar-social ms-slidebar-block">
    <h4 class="ms-slidebar-block-title">Social Links</h4>
    <div class="ms-slidebar-social">
      {{-- <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-facebook">
        <i class="zmdi zmdi-facebook"></i>
        <div class="ripple-container"></div>
      </a> --}}
      <a href="https://www.facebook.com/matrixconsulting.hu" class="btn-circle btn-circle-raised btn-facebook">
        <i class="zmdi zmdi-facebook"></i>
        <div class="ripple-container"></div>
      </a>
      {{-- <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-twitter">
        <i class="zmdi zmdi-twitter"></i>
        <div class="ripple-container"></div>
      </a>
      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-google">
        <i class="zmdi zmdi-google"></i>
        <div class="ripple-container"></div>
      </a>
      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-instagram">
        <i class="zmdi zmdi-instagram"></i>
        <div class="ripple-container"></div>
      </a> --}}
    </div>
  </div>
</div>
