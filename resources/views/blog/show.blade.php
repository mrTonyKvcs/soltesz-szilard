@extends('layouts.app')
@section('content')
	<div class="material-background"></div>
	<div class="container">
	    <div class="row">
          <div class="col-md-12">
		    <div class="card animated materialUp animation-delay-5" ">
	            <div class="card-block card-block-big ">
	                <h1 class="no-mt ">{{ $blog->title }}</h1>
	                <div class="mb-4 ">
	                    <a href="javascript:void(0) " class="ms-tag ms-tag-info ">Design</a>
	                    <span class="ml-1 hidden-xs "><i class="zmdi zmdi-time mr-05 color-info "></i> <span class="color-medium-dark ">{{ $blog->getDate($blog->created_at) }}</span></span>
	                </div>
	                <img src="/img/demo/postG3.jpg " alt=" " class="img-responsive mb-4">
	                {{ $blog->description }}
	            </div>
		    </div>
        </div>
    </div>
@stop