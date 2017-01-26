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
    <li class="panel" role="tab" id="sch1">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#slidebar-menu" href="#sc1" aria-expanded="false" aria-controls="sc1">
        <i class="zmdi zmdi-local-activity"></i> {{ trans('navbar.activity') }} </a>
      <ul id="sc1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="sch1">
        <li>
          <a href="#">{{ trans('navbar.selfless-coaching')}}</a>
        </li>
        <li>
          <a href="#">{{ trans('navbar.guidance')}}</a>
        </li>
        <li>
          <a href="#">{{ trans('navbar.group-training')}}</a>
        </li>
      </ul>
    </li>
    <li>
      <a class="link" href="#">
        <i class="zmdi zmdi-run"></i> {{ trans('navbar.motivation') }}</a>
    </li>
    <li>
      <a class="link" href="#">
        <i class="zmdi zmdi-face"></i> {{ trans('navbar.about') }}</a>
    </li>
    <li class="panel" role="tab" id="sch2">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#slidebar-menu" href="#sc2" aria-expanded="false" aria-controls="sc2">
        <i class="zmdi zmdi-alert-circle"></i> {{ trans('navbar.topic') }} </a>
      <ul id="sc2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="sch2">
        <li>
          <a href="#">{{ trans('navbar.communication-techniques') }}</a>
        </li>
        <li>
          <a href="#">{{ trans('navbar.developing-competencies') }}</a>
        </li>
        <li>
          <a href="#">{{ trans('navbar.stress-sticking') }}</a>
        </li>
        <li>
          <a href="#">{{ trans('navbar.life-crises') }}</a>
        </li>
      </ul>
    </li>
    <li>
      <a class="link" href="{{ route('blog.index') }}">
        <i class="zmdi zmdi-edit"></i> {{ trans('navbar.blog') }}</a>
    </li>
    <li>
      <a class="link" href="#">
        <i class="zmdi zmdi-calendar-note"></i> {{ trans('navbar.traning') }}</a>
    </li>
    <li>
      <a class="link" href="{{ route('pages.price') }}">
        <i class="zmdi zmdi-money"></i> {{ trans('navbar.price') }}</a>
    </li>
    <li>
      <a class="link" href="{{ route('pages.contact') }}">
        <i class="zmdi zmdi-email"></i> {{ trans('navbar.contact') }}</a>
    </li>
  </ul>
  <div class="ms-slidebar-social ms-slidebar-block">
    <h4 class="ms-slidebar-block-title">Social Links</h4>
    <div class="ms-slidebar-social">
      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-facebook">
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