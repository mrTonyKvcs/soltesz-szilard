@extends('layouts.app')
@section('content')
	<header class="ms-hero-page-override ms-hero-img-city ms-hero-bg-dark">
		<div class="container">
		  <div class="text-center">
		    <span class="ms-logo ms-logo-lg ms-logo-white center-block mb-2 mt-2 animated zoomInDown animation-delay-5">S</span>
		    <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">See Our Plans</span>
		    </h1>
		    <p class="lead lead-lg color-white text-center center-block mt-2 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">Discover our projects and the
		      <span class="color-warning">rigorous process</span> of creation. Our principles are creativity, design, experience and knowledge.</p>
		  </div>
		</div>
	</header>
	<div class="wrap ms-hero-img-coffee ms-hero-bg-warning ms-bg-fixed">

	    <div class="container color-dark">
	      <div class="row card-hero no-shadow">
	        <div class="col-lg-3 col-sm-6 price-table price-table-info animated zoomInUp animation-delay-6">
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
	                <i class="zmdi zmdi-settings"></i> Dignissimos velit reiciendis.</li>
	              <li>
	                <i class="zmdi zmdi-cloud"></i> Nihil corrupti soluta vitae non.</li>
	              <li>
	                <i class="zmdi zmdi-star"></i> Atque molestiae in tua blanditis.</li>
	            </ul>
	            <div class="text-center">
	              <a href="javascript:void(0)" class="btn btn-info btn-raised">
	                <i class="zmdi zmdi-cloud-download"></i> Get Now</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-lg-3 col-sm-6 price-table prominent price-table-success animated zoomInUp animation-delay-8">
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
	                <i class="zmdi zmdi-settings"></i> Dignissimos velit reiciendis.</li>
	              <li>
	                <i class="zmdi zmdi-cloud"></i> Nihil corrupti soluta vitae non.</li>
	              <li>
	                <i class="zmdi zmdi-star"></i> Atque molestiae in tua blanditis.</li>
	            </ul>
	            <div class="text-center">
	              <a href="javascript:void(0)" class="btn btn-success btn-raised">
	                <i class="zmdi zmdi-cloud-download"></i> Get Now</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-lg-3 col-sm-6 price-table price-table-danger animated zoomInUp animation-delay-8">
	          <header class="price-table-header">
	            <span class="price-table-category">Business</span>
	            <h3>
	              <sup>$</sup>49.99
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
	                <i class="zmdi zmdi-settings"></i> Dignissimos velit reiciendis.</li>
	              <li>
	                <i class="zmdi zmdi-cloud"></i> Nihil corrupti soluta vitae non.</li>
	              <li>
	                <i class="zmdi zmdi-star"></i> Atque molestiae in tua blanditis.</li>
	            </ul>
	            <div class="text-center">
	              <a href="javascript:void(0)" class="btn btn-danger btn-raised">
	                <i class="zmdi zmdi-cloud-download"></i> Get Now</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-lg-3 col-sm-6 price-table price-table-royal animated zoomInUp animation-delay-9">
	          <header class="price-table-header">
	            <span class="price-table-category">Business</span>
	            <h3>
	              <sup>$</sup>99.99
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
	                <i class="zmdi zmdi-settings"></i> Dignissimos velit reiciendis.</li>
	              <li>
	                <i class="zmdi zmdi-cloud"></i> Nihil corrupti soluta vitae non.</li>
	              <li>
	                <i class="zmdi zmdi-star"></i> Atque molestiae in tua blanditis.</li>
	            </ul>
	            <div class="text-center">
	              <a href="javascript:void(0)" class="btn btn-royal btn-raised">
	                <i class="zmdi zmdi-cloud-download"></i> Get Now</a>
	            </div>
	          </div>
	        </div>
	      </div>
	      <div class="text-center wow fadeInUp animation-delay-7">
	        <p class="lead lead-lg color-white text-center center-block mt-6 mw-800 text-uppercase fw-300 ">If you have questions or need a personalized plan, contact us and we will study your project and offer a customized solution.</p>
	        <a href="{{ route('pages.contact') }}" class="btn btn-white btn-raised color-info">
	          <i class="zmdi zmdi-email"></i> Contact Us</a>
	      </div>
	    </div>
	</div>
@stop