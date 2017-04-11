@extends('layouts.app')
@section('content')
<div class="material-background"></div>
<div class="container">
    <div class="text-center mb-4">
      <h2 class="uppercase color-white animated fadeInUp animation-delay-7">{{ trans('navbar.price') }}</h2>
      <p class="lead uppercase color-medium animated fadeInUp animation-delay-7">Surprise with our unique features</p>
    </div>
    <div class="row">
      <div class="col-md-4 price-table price-table-info animated zoomInDown animation-delay-7">
        <header class="price-table-header">
          <span class="price-table-category">Personal</span>
          <h3>
            <sup>$</sup>9.99
            <sub>/mo.</sub>
          </h3>
        </header>
        <div class="price-table-body">
          <ul class="price-table-list">
            <li>
              <i class="zmdi zmdi-code"></i> Lorem ipsum dolor sit amet.</li>
            <li>
              <i class="zmdi zmdi-globe"></i> Voluptate ex quam autem. Dolor.</li>
            <li>
              <i class="zmdi zmdi-settings"></i> Dignissimos velit reiciendis cumque.</li>
            <li>
              <i class="zmdi zmdi-cloud"></i> Nihil corrupti soluta vitae non.</li>
            <li>
              <i class="zmdi zmdi-star"></i> Atque molestiae, blanditiis ratione.</li>
          </ul>
          <div class="text-center">
            <a href="javascript:void(0)" class="btn btn-info btn-raised">
              <i class="zmdi zmdi-cloud-download"></i> Get Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 price-table price-table-success prominent animated zoomInUp animation-delay-7">
        <header class="price-table-header">
          <span class="price-table-category">Professional</span>
          <h3>
            <sup>$</sup>19.99
            <sub>/mo.</sub>
          </h3>
        </header>
        <div class="price-table-body">
          <ul class="price-table-list">
            <li>
              <i class="zmdi zmdi-code"></i> Lorem ipsum dolor sit amet.</li>
            <li>
              <i class="zmdi zmdi-globe"></i> Voluptate ex quam autem. Dolor.</li>
            <li>
              <i class="zmdi zmdi-settings"></i> Dignissimos velit reiciendis cumque.</li>
            <li>
              <i class="zmdi zmdi-cloud"></i> Nihil corrupti soluta vitae non.</li>
            <li>
              <i class="zmdi zmdi-star"></i> Atque molestiae, blanditiis ratione.</li>
          </ul>
          <div class="text-center">
            <a href="javascript:void(0)" class="btn btn-success btn-raised">
              <i class="zmdi zmdi-cloud-download"></i> Get Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 price-table price-table-warning animated zoomInDown animation-delay-7">
        <header class="price-table-header">
          <span class="price-table-category">Business</span>
          <h3>
            <sup>$</sup>39.99
            <sub>/mo.</sub>
          </h3>
        </header>
        <div class="price-table-body">
          <ul class="price-table-list">
            <li>
              <i class="zmdi zmdi-code"></i> Lorem ipsum dolor sit amet.</li>
            <li>
              <i class="zmdi zmdi-globe"></i> Voluptate ex quam autem. Dolor.</li>
            <li>
              <i class="zmdi zmdi-settings"></i> Dignissimos velit reiciendis cumque.</li>
            <li>
              <i class="zmdi zmdi-cloud"></i> Nihil corrupti soluta vitae non.</li>
            <li>
              <i class="zmdi zmdi-star"></i> Atque molestiae, blanditiis ratione.</li>
          </ul>
          <div class="text-center">
            <a href="javascript:void(0)" class="btn btn-warning btn-raised">
              <i class="zmdi zmdi-cloud-download"></i> Get Now</a>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="wrap ms-hero-bg-info ms-hero-img-meeting ms-bg-fixed mb-6 mt-4" style="margin-bottom: 0;">
    <div class="container">
      <h2 class="text-center color-white no-mt mb-6 wow fadeInUp">Our Services</h2>
      <div class="col-md-4 col-sm-6">
        <div class="ms-icon-feature wow flipInX animation-delay-4">
          <div class="ms-icon-feature-icon">
            <span class="ms-icon ms-icon-lg ms-icon-inverse ms-icon-white">
              <i class="fa fa-cloud"></i>
            </span>
          </div>
          <div class="ms-icon-feature-content color-white">
            <h4 class="color-warning">Cloud Computing</h4>
            <p>Praesentium cumque voluptate harum quae doloribus, atque error debitis, amet velit in similique, necessitatibus odit vero sunt.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="ms-icon-feature wow flipInX animation-delay-4">
          <div class="ms-icon-feature-icon">
            <span class="ms-icon ms-icon-lg ms-icon-inverse ms-icon-white">
              <i class="fa fa-desktop"></i>
            </span>
          </div>
          <div class="ms-icon-feature-content color-white">
            <h4 class="color-warning">Web Design and SEO</h4>
            <p>Praesentium cumque voluptate harum quae doloribus, atque error debitis, amet velit in similique, necessitatibus odit vero sunt.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="ms-icon-feature wow flipInX animation-delay-4">
          <div class="ms-icon-feature-icon">
            <span class="ms-icon ms-icon-lg ms-icon-inverse ms-icon-white">
              <i class="fa fa-tablet"></i>
            </span>
          </div>
          <div class="ms-icon-feature-content color-white">
            <h4 class="color-warning">Mobile and Tablet Apps</h4>
            <p>Praesentium cumque voluptate harum quae doloribus, atque error debitis, amet velit in similique, necessitatibus odit vero sunt.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="ms-icon-feature wow flipInX animation-delay-4">
          <div class="ms-icon-feature-icon">
            <span class="ms-icon ms-icon-lg ms-icon-inverse ms-icon-white">
              <i class="fa fa-wordpress"></i>
            </span>
          </div>
          <div class="ms-icon-feature-content color-white">
            <h4 class="color-warning">Wordpress Themes</h4>
            <p>Praesentium cumque voluptate harum quae doloribus, atque error debitis, amet velit in similique, necessitatibus odit vero sunt.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="ms-icon-feature wow flipInX animation-delay-4">
          <div class="ms-icon-feature-icon">
            <span class="ms-icon ms-icon-lg ms-icon-inverse ms-icon-white">
              <i class="fa fa-graduation-cap"></i>
            </span>
          </div>
          <div class="ms-icon-feature-content color-white">
            <h4 class="color-warning">Training and development</h4>
            <p>Praesentium cumque voluptate harum quae doloribus, atque error debitis, amet velit in similique, necessitatibus odit vero sunt.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="ms-icon-feature wow flipInX animation-delay-4">
          <div class="ms-icon-feature-icon">
            <span class="ms-icon ms-icon-lg ms-icon-inverse ms-icon-white">
              <i class="fa fa-send"></i>
            </span>
          </div>
          <div class="ms-icon-feature-content color-white">
            <h4 class="color-warning">Customer service</h4>
            <p>Praesentium cumque voluptate harum quae doloribus, atque error debitis, amet velit in similique, necessitatibus odit vero sunt.</p>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="container mt-6">
  <div class="row">
    <div class="col-lg-8 col-md-7">
      <div class="card card-primary animated fadeInUp animation-delay-7">
        <div class="ms-hero-bg-primary ms-hero-img-mountain">
          <h2 class="text-center no-m pt-4 pb-4 color-white index-1">Contact</h2>
        </div>
        <div class="card-block">
          <form class="form-horizontal">
            <fieldset>
              <div class="form-group">
                <label for="inputName" class="col-md-2 control-label">Name</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="inputName" placeholder="Name"> </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-md-2 control-label">Email</label>
                <div class="col-md-9">
                  <input type="email" class="form-control" id="inputEmail" placeholder="Email"> </div>
              </div>
              <div class="form-group">
                <label for="inputSubject" class="col-md-2 control-label">Subject</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="inputSubject" placeholder="Subject"> </div>
              </div>
              <div class="form-group">
                <label for="textArea" class="col-md-2 control-label">Message</label>
                <div class="col-md-9">
                  <textarea class="form-control" rows="5" id="textArea" placeholder="Your message..."></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-9 col-md-offset-2">
                  <button type="submit" class="btn btn-raised btn-primary">Submit</button>
                  <button type="button" class="btn btn-danger">Cancel</button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-5">
      <div class="card card-primary animated fadeInUp animation-delay-7">
        <div class="card-block">
          <div class="text-center mb-2">
            <span class="ms-logo ms-logo-sm mr-1">S</span>
            <h3 class="no-m ms-site-title">Soltész
              <span>Szilárd</span>
            </h3>
          </div>
          <address class="no-mb">
            <p>
              <i class="color-danger-light zmdi zmdi-pin mr-1"></i> 795 Folsom Ave, Suite 600</p>
            <p>
              <i class="color-warning-light zmdi zmdi-map mr-1"></i> San Francisco, CA 94107</p>
            <p>
              <i class="color-info-light zmdi zmdi-email mr-1"></i>
              <a href="mailto:joe@example.com">example@domain.com</a>
            </p>
            <p>
              <i class="color-royal-light zmdi zmdi-phone mr-1"></i>+34 123 456 7890 </p>
            <p>
              <i class="color-success-light fa fa-fax mr-1"></i>+34 123 456 7890 </p>
          </address>
        </div>
      </div>
      <div class="card card-primary animated fadeInUp animation-delay-7">
        <div class="card-header">
          <h3 class="card-title">
            <i class="zmdi zmdi-map"></i>Map</h3>
        </div>
        <iframe width="100%" height="340" src="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=central%2Bpark&ie=UTF8&z=12&t=m&iwloc=near&output=embed"></iframe>
      </div>
    </div>
  </div>
</div>
@stop