@extends('layouts.app')
@section('content')
	<div class="ms-hero-page-override ms-hero-img-meeting ms-hero-bg-dark-light">
        <div class="container">
          <div class="text-center">
            <h1 class="no-m ms-site-title center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">{{ $training->title }}</h1>
            <p class="lead lead-lg color-light text-center center-block mt-2 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">Esemény</p>
          </div>
        </div>
      </div>
	<div class="container">
        <div class="row">
          <div class="col-md-12">
              <article class="card card-hero wow zoomInRight animation-delay-5 mb-4">
                <div class="card-block card-block-big">
				<div class="row">
					<div class="col-md-4">
		              <div class="card-block">
		                <h2 class="color-primary no-mb">Információk</h2>
		              </div>
		              <table class="table table-no-border table-striped">
		                <tr>
		                  <th>
		                    <i class="zmdi zmdi-accounts mr-1 color-royal"></i> Max. Létszám</th>
		                  <td>{{ $training->max_person }} /  fő</td>
		                </tr>
		                <tr>
		                  <th>
		                    <i class="zmdi zmdi-money mr-1 color-warning"></i> Ár</th>
		                  <td>{{ $training->price }} Ft</td>
		                </tr>
		                <tr>
		                  <th>
		                    <i class="fa fa-map-marker mr-1 color-success"></i> Helyszín</th>
		                  <td>{{ $training->locale }}</td>
		                </tr>
		                <tr>
		                  <th>
		                    <i class="zmdi zmdi-calendar mr-1 color-info"></i> Időpont</th>
		                  <td>{{ $training->started_at->format('Y-M-d') }}</td>
		                </tr>
		              </table>
		            </div>
					<div class="col-md-8">
						<div class="card-block">
							<h2 class="color-primary no-mb text-left">Leírás</h2><br>
							<p>{!! $training->description !!}</p>
						</div>
					</div>	
				</div>
              <div class="row">
                  {!! Form::open(['class' => 'form-horizontal', 'route' => 'mail.tender']) !!}
              		<fieldset>
              			<h2 class="color-primary no-mb text-center">Jelentkezés</h2><hr>
              			<div class="form-group">
							<div class="col-md-8 col-md-offset-2">
								{{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Név', 'type' => 'text']) }}
							</div>
		                </div>
		                <div class="form-group">
							<div class="col-md-8 col-md-offset-2">
								{{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'type' => 'text']) }}
							</div>
		                </div>
		                <div class="form-group">
							<div class="col-md-8 col-md-offset-2">
								{{ Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Telefonszám', 'type' => 'text']) }}
							</div>
		                </div>
		                <div class="form-group">
							<div class="col-md-8 col-md-offset-2">
								{{ Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Lakcím', 'type' => 'text']) }}
							</div>
		                </div>
		                <div class="form-group">
							<div class="col-md-8 col-md-offset-2">
								{{ Form::text('rank', null, ['class' => 'form-control', 'placeholder' => 'Beosztás', 'type' => 'text']) }}
							</div>
		                </div>
		                 <div class="form-group">
		                  <div class="col-md-9 col-md-offset-2">
		                    <button type="submit" class="btn btn-raised btn-primary">Jelentkezem</button>
		                    <button type="button" class="btn btn-danger">Mégsem</button>
		                  </div>
		                </div>
              		</fieldset>
              	{!! Form::close() !!}
              </div>
            </div>
          </article>
      </div>
    </div>
</div>
@stop
