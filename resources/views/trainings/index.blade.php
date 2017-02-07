@extends('layouts.app')
@section('content')

<div class="ms-hero-page ms-hero-img-meeting ms-hero-bg-primary ms-bg-fixed mb-4">
	<div class="container">
	  <div class="text-center">
	    <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Timeline</h1>
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
          <li class="ms-timeline-item wow materialUp">
            <div class="ms-timeline-date">
              <time class="timeline-time" datetime="">2016
                <span>October</span>
              </time>
              <i class="ms-timeline-point"></i>
            </div>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Simple text event in Timeline</h3>
              </div>
              <div class="card-block"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus officiis autem magni et, nisi eveniet nulla magnam tenetur voluptatem dolore, assumenda delectus error porro animi architecto dolorum quod veniam nesciunt. </div>
            </div>
          </li>
          <li class="ms-timeline-item wow materialUp">
            <div class="ms-timeline-date">
              <time class="timeline-time" datetime="">2016
                <span>March</span>
              </time>
              <i class="ms-timeline-point bg-royal"></i>
              <img src="/img/demo/avatar6.jpg" class="ms-timeline-point-img"> </div>
            <div class="card card-royal">
              <div class="card-header">
                <h3 class="card-title">Card Title</h3>
              </div>
              <div class="card-block">
                <div class="row">
                  <div class="col-sm-4">
                    <img src="/img/demo/office1.jpg" alt="" class="img-responsive"> </div>
                  <div class="col-sm-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, praesentium, quam! Quia fugiat aperiam.</p>
                    <p>Perspiciatis soluta voluptate dolore officiis libero repellat cupiditate explicabo atque facere aliquam.</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="ms-timeline-item wow materialUp">
            <div class="ms-timeline-date">
              <time class="timeline-time" datetime="">2015
                <span>October</span>
              </time>
              <i class="ms-timeline-point bg-success"></i>
            </div>
            <div class="card card-success-inverse">
              <div class="card-block"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus officiis autem magni et, nisi eveniet nulla magnam tenetur voluptatem dolore, assumenda delectus error porro animi architecto dolorum quod veniam nesciunt. </div>
            </div>
          </li>
          <li class="ms-timeline-item wow materialUp">
            <div class="ms-timeline-date">
              <time class="timeline-time" datetime="">2015
                <span>February</span>
              </time>
              <i class="ms-timeline-point bg-warning"></i>
              <img src="/img/demo/avatar2.jpg" class="ms-timeline-point-img"> </div>
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Card Title</h3>
              </div>
              <div class="card-block">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, nulla recusandae blanditiis architecto soluta culpa obcaecati quis earum atque consequuntur.</p>
                <div class="row">
                  <div class="col-sm-4">
                    <img src="/img/demo/office2.jpg" alt="" class="img-responsive"> </div>
                  <div class="col-sm-4">
                    <img src="/img/demo/office3.jpg" alt="" class="img-responsive"> </div>
                  <div class="col-sm-4">
                    <img src="/img/demo/office4.jpg" alt="" class="img-responsive"> </div>
                </div>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, ipsum voluptates eius placeat dolorum reprehenderit ducimus accusamus magni aspernatur at dolore assumenda quae suscipit enim veritatis obcaecati molestias laudantium
                  maxime!</p>
              </div>
            </div>
          </li>
          <li class="ms-timeline-item wow materialUp">
            <div class="ms-timeline-date">
              <time class="timeline-time" datetime="">2014
                <span>July</span>
              </time>
              <i class="ms-timeline-point"></i>
            </div>
            <div class="card">
              <blockquote class="blockquote-color-bg-primary withripple color-white">
                <p>
                  <strong>Blockquote in timeline!</strong> consectetur adipiscing elit. Integer sodales sagittis magna. consectetur adipiscing elit sed consequat, quam semper libero.</p>
                <footer>Someone famous in
                  <cite title="Source Title">Source Title</cite>
                </footer>
              </blockquote>
            </div>
          </li>
          <li class="ms-timeline-item wow materialUp">
            <div class="ms-timeline-date">
              <time class="timeline-time" datetime="">2014
                <span>January</span>
              </time>
              <i class="ms-timeline-point bg-info"></i>
              <img src="/img/demo/avatar3.jpg" class="ms-timeline-point-img"> </div>
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Card Title</h3>
              </div>
              <div data-type="youtube" data-video-id="9ZfN87gSjvI"></div>
            </div>
          </li>
          <li class="ms-timeline-item wow materialUp">
            <div class="ms-timeline-date">
              <time class="timeline-time" datetime="">2013
                <span>June</span>
              </time>
              <i class="ms-timeline-point"></i>
            </div>
            <div class="card">
              <div class="ms-hero-bg-primary ms-hero-img-coffee">
                <h3 class="color-white index-1 text-center no-m pt-4">Victoria Smith</h3>
                <div class="color-medium index-1 text-center np-m">@vic_smith</div>
                <img src="/img/demo/avatar1.jpg" alt="..." class="img-avatar-circle"> </div>
              <div class="card-block pt-4 text-center">
                <h3 class="color-primary">Bio</h3>
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
          </li>
          <li class="ms-timeline-item wow materialUp">
            <div class="ms-timeline-date">
              <time class="timeline-time" datetime="">2012
                <span>March</span>
              </time>
              <i class="ms-timeline-point bg-success"></i>
              <img src="/img/demo/avatar5.jpg" class="ms-timeline-point-img"> </div>
            <div class="card">
              <div class="withripple zoom-img">
                <a href="javascript:void(0);">
                  <img src="/img/demo/m1.jpg" alt="" class="img-responsive"> </a>
              </div>
              <div class="card-block text-center">
                <h4 class="color-success">Lorem ipsum dolor sit</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam sed labore autem nesciunt ea veniam recusandae necessitatibus reprehenderit. Praesentium non velit at natus ut dolores iusto totam doloremque perspiciatis. Quidem.</p>
                <a href="javascript:void(0)" class="btn btn-success">
                  <i class="zmdi zmdi-star"></i> Button</a>
                <a href="javascript:void(0)" class="btn btn-success btn-raised">
                  <i class="zmdi zmdi-flower"></i> Button</a>
              </div>
            </div>
          </li>
          <li class="ms-timeline-item wow materialUp">
            <div class="ms-timeline-date">
              <time class="timeline-time" datetime="">2010
                <span>February</span>
              </time>
              <i class="ms-timeline-point bg-royal"></i>
            </div>
            <div class="card card-royal-inverse">
              <div class="card-block text-center">
                <span class="ms-icon ms-icon-white ms-icon-round ms-icon-xlg">
                  <i class="zmdi zmdi-cloud-outline color-royal"></i>
                </span>
                <h4 class="color-light">Lorem ipsum dolor</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id quam odio voluptates porro harum ducimus non provident, dolor, modi accusantium rem quis neque labore facilis</p>
                <a href="javascript:void(0)" class="btn btn-white">
                  <i class="zmdi zmdi-airplane"></i> Button</a>
              </div>
            </div>
          </li>
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