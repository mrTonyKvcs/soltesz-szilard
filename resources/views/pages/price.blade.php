@extends('layouts.app')
@section('content')
<div class="material-background"></div>
<div class="container">
    <div class="text-center mb-4">
      <h2 class="uppercase color-white animated fadeInUp animation-delay-7">See our subscription plans</h2>
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
<div class="wrap ms-hero-bg-info ms-hero-img-meeting ms-bg-fixed mb-6 mt-4">
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
      <div class="text-center">
        <a href="javascript:void(0)" class="btn btn-raised btn-danger wow flipInX animation-delay-8">
          <i class="fa fa-space-shuttle"></i> I have a project</a>
        <a href="javascript:void(0)" class="btn btn-raised btn-info wow flipInX animation-delay-9">
          <i class="zmdi zmdi-info"></i> More Information</a>
      </div>
    </div>
</div>
<div class="container">
	
        <h1 class="color-primary text-center">Compare our plans</h1>
        <p class="lead text-center center-block mb-4 mw-800">Suscipit placeat dolor iste, amet libero quidem aliquam expedita dicta repellendus ut modi sed mollitia dolorem tempore obcaecati incidunt est asperiores.</p>
        <div class="row pricing-table-container">
          <div class="col-md-4 hidden-sm hidden-xs pricing-col">
            <div class="pricing-table pricing-table-description">
              <div class="pricing-table-head">
                <h2> Plans Available
                  <span>Officia deserunt mollitia</span>
                </h2>
                <h3 class="price"> Pay Monthly </h3>
              </div>
              <ul class="pricing-table-content">
                <li>
                  <i class="fa fa-globe"></i>Domains </li>
                <li>
                  <i class="fa fa-briefcase"></i>Subdomains </li>
                <li>
                  <i class="fa fa-cloud-upload"></i>Diskspace </li>
                <li>
                  <i class="fa fa-envelope"></i>Email Addresses </li>
                <li>
                  <i class="fa fa-inbox"></i> MySQL Databases </li>
                <li>
                  <i class="fa fa-gift"></i>Google AdWords Credits </li>
                <li>
                  <i class="fa fa-terminal"></i>SSH Access </li>
                <li>
                  <i class="fa fa-location-arrow"></i>Message from Users List </li>
                <li>
                  <i class="fa fa-code"></i>PHP 5, Python, Node.js </li>
                <li>
                  <i class="fa fa-dashboard"></i>Scheduled Lock Screen </li>
                <li>
                  <i class="fa fa-cogs"></i>Ports Controls </li>
                <li>
                  <i class="fa fa-wrench"></i>Customisable Templates </li>
                <li>
                  <i class="fa fa-umbrella"></i>SSL Certificate </li>
                <li>
                  <i class="fa fa-gavel"></i>Premium DNS </li>
                <li>
                  <i class="fa fa-phone"></i>Phone and Web Support </li>
              </ul>
            </div>
          </div>
          <div class="col-md-2 pricing-col">
            <div class="pricing-table">
              <div class="pricing-table-head">
                <h2> Begginer
                  <span>Officia deserunt mollitia</span>
                </h2>
                <h3 class="price"> $
                  <i>4</i>.99
                  <span class="hidden-md hidden-lg">Per Month</span>
                </h3>
              </div>
              <ul class="pricing-table-content">
                <li> 1
                  <span class="hidden-md hidden-lg">Domains</span>
                </li>
                <li> 10
                  <span class="hidden-md hidden-lg">Subdomains</span>
                </li>
                <li> 10 GB
                  <span class="hidden-md hidden-lg">Diskspace</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Email Addresses</span>
                </li>
                <li> 1
                  <span class="hidden-md hidden-lg"> MySQL Databases</span>
                </li>
                <li> $50
                  <span class="hidden-md hidden-lg">Google AdWords Credits</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">SSH Access</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">Message from Users List</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">PHP 5, Python, Node.js</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Scheduled Lock Screen</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Ports Controls</span>
                </li>
                <li>
                  <i class="fa fa-times"> </i>
                  <span class="hidden-md hidden-lg">Customizable Templates</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">SSL Certificate</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Premium DNS</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">Phone &amp; Support</span>
                </li>
              </ul>
              <div class="pricing-table-footer text-center">
                <a href="javascript:void(0)" class="btn btn-primary btn-raised">
                  <i class="zmdi zmdi-cloud-download"></i> Get Now</a>
              </div>
            </div>
          </div>
          <div class="col-md-2 pricing-col">
            <div class="pricing-table">
              <div class="pricing-table-head">
                <h2> Professional
                  <span>Officia deserunt mollitia</span>
                </h2>
                <h3 class="price"> $
                  <i>99</i>.99
                  <span class="hidden-md hidden-lg">Per Month</span>
                </h3>
              </div>
              <ul class="pricing-table-content">
                <li> 1
                  <span class="hidden-md hidden-lg">Domains</span>
                </li>
                <li> 10
                  <span class="hidden-md hidden-lg">Subdomains</span>
                </li>
                <li> 10 GB
                  <span class="hidden-md hidden-lg">Diskspace</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Email Addresses</span>
                </li>
                <li> 1
                  <span class="hidden-md hidden-lg"> MySQL Databases</span>
                </li>
                <li> $50
                  <span class="hidden-md hidden-lg">Google AdWords Credits</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">SSH Access</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">Message from Users List</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">PHP 5, Python, Node.js</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Scheduled Lock Screen</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Ports Controls</span>
                </li>
                <li>
                  <i class="fa fa-times"> </i>
                  <span class="hidden-md hidden-lg">Customizable Templates</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">SSL Certificate</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Premium DNS</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">Phone &amp; Support</span>
                </li>
              </ul>
              <div class="pricing-table-footer text-center">
                <a href="javascript:void(0)" class="btn btn-primary btn-raised">
                  <i class="zmdi zmdi-cloud-download"></i> Get Now</a>
              </div>
            </div>
          </div>
          <div class="col-md-2 pricing-col">
            <div class="pricing-table">
              <div class="pricing-table-head">
                <h2> Expert
                  <span>Officia deserunt mollitia</span>
                </h2>
                <h3 class="price"> $
                  <i>199</i>.99
                  <span class="hidden-md hidden-lg">Per Month</span>
                </h3>
              </div>
              <ul class="pricing-table-content">
                <li> 1
                  <span class="hidden-md hidden-lg">Domains</span>
                </li>
                <li> 10
                  <span class="hidden-md hidden-lg">Subdomains</span>
                </li>
                <li> 10 GB
                  <span class="hidden-md hidden-lg">Diskspace</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Email Addresses</span>
                </li>
                <li> 1
                  <span class="hidden-md hidden-lg"> MySQL Databases</span>
                </li>
                <li> $50
                  <span class="hidden-md hidden-lg">Google AdWords Credits</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">SSH Access</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">Message from Users List</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">PHP 5, Python, Node.js</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Scheduled Lock Screen</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Ports Controls</span>
                </li>
                <li>
                  <i class="fa fa-times"> </i>
                  <span class="hidden-md hidden-lg">Customizable Templates</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">SSL Certificate</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Premium DNS</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">Phone &amp; Support</span>
                </li>
              </ul>
              <div class="pricing-table-footer text-center">
                <a href="javascript:void(0)" class="btn btn-primary btn-raised">
                  <i class="zmdi zmdi-cloud-download"></i> Get Now</a>
              </div>
            </div>
          </div>
          <div class="col-md-2 pricing-col">
            <div class="pricing-table">
              <div class="pricing-table-head">
                <h2> Ultimate
                  <span>Officia deserunt mollitia</span>
                </h2>
                <h3 class="price"> $
                  <i>499</i>.99
                  <span class="hidden-md hidden-lg">Per Month</span>
                </h3>
              </div>
              <ul class="pricing-table-content">
                <li> 1
                  <span class="hidden-md hidden-lg">Domains</span>
                </li>
                <li> 10
                  <span class="hidden-md hidden-lg">Subdomains</span>
                </li>
                <li> 10 GB
                  <span class="hidden-md hidden-lg">Diskspace</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Email Addresses</span>
                </li>
                <li> 1
                  <span class="hidden-md hidden-lg"> MySQL Databases</span>
                </li>
                <li> $50
                  <span class="hidden-md hidden-lg">Google AdWords Credits</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">SSH Access</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">Message from Users List</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">PHP 5, Python, Node.js</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Scheduled Lock Screen</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Ports Controls</span>
                </li>
                <li>
                  <i class="fa fa-times"> </i>
                  <span class="hidden-md hidden-lg">Customizable Templates</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">SSL Certificate</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Premium DNS</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">Phone &amp; Support</span>
                </li>
              </ul>
              <div class="pricing-table-footer text-center">
                <a href="javascript:void(0)" class="btn btn-primary btn-raised">
                  <i class="zmdi zmdi-cloud-download"></i> Get Now</a>
              </div>
            </div>
          </div>
        </div>
        <!-- row -->
      
</div>
@stop