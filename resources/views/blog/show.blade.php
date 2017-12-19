@extends('layouts.app')
@section('content')
	<div class="material-background"></div>
	<div class="container" align="justify">
	    <div class="row">
          <div class="col-md-12">
		    <div class="card animated materialUp animation-delay-5">
	            <div class="card-block card-block-big ">
	                <h1 class="no-mt ">{{ $blog->title }}</h1>
	                <hr>
	                <div class="mb-4 ">
	                    <span class="ml-1 hidden-xs "><i class="zmdi zmdi-time mr-05 color-info "></i> <span class="color-medium-dark ">{{ $blog->created_at->format('Y-M-d')}} </span></span>
	                </div>
					{{--<img src="/{{ $blog->img_path }}" alt=" " class="img-responsive mb-4">--}}
	                {{ $blog->description }}
	            </div>
		    </div>
        </div>
    </div>
@stop
