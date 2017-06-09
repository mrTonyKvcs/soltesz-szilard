@extends('layouts.app')
@section('content')
	<div class="material-background"></div>
	<div class="container text-center mb-6">
		<h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Jelentkezés</h1>
		<p class="lead lead-lg color-white text-center center-block mt-2 mw-800 fw-300 animated fadeInUp animation-delay-7">Follow our blog and discover the latest content and trends in the market. In addition you will discover the best
		<span class="colorStar">tricks</span> and
		<span class="colorStar">discounts</span>.</p>
	</div>
	<div class="container">
        <div class="row">
          <div class="col-md-12">
              <article class="card card-primary wow zoomInRight animation-delay-5 mb-4">
                <div class="card-block card-block-big">
                  <div class="row">
                  	<form class="form-horizontal">
                  		<fieldset>
                  			<div class="form-group">
			                  <label for="inputName" class="col-md-2 control-label">Name</label>
			                  <div class="col-md-9">
			                    <input type="text" class="form-control" id="inputName" placeholder="Name"> </div>
			                </div>
			                <div class="form-group">
			                  <label for="inputName" class="col-md-2 control-label">Name</label>
			                  <div class="col-md-9">
			                    <input type="text" class="form-control" id="inputName" placeholder="Name"> </div>
			                </div>
			                 <div class="form-group">
			                  <div class="col-md-9 col-md-offset-2">
			                    <button type="submit" class="btn btn-raised btn-primary">Jelentkezem</button>
			                    <button type="button" class="btn btn-danger">Mégsem</button>
			                  </div>
			                </div>
                  		</fieldset>
                  	</form>
                  </div>
                </div>
              </article>
          </div>
	    </div>
	</div>
@stop