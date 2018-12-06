@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                @if(session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}  
                    </div><br />
                @endif
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="mb-5" action="{{ route('olvasmanyok.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="title" class="form-control" id="exampleInput1" aria-describedby="titleHelp" placeholder="Cím" value="{{ $blog->title }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input class="form-control" type="date" name="expired_at" placeholder="Datum" value="{{ $blog->expired_at }}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="description" class="form-control" name="" cols="30" rows="10" placeholder="Tartalom" value="">
                            {{ $blog->description }}
                        </textarea>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            
                            <div class="col-md-6">
                                <img class="img-fluid" src="/{{ $blog->img_path }}" alt="">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleFormControlFile1">Képcsere: </label>
                                <input name="img_path" type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success col-md-12 text-uppercase text-center">új olvasmány feldolgozása</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection
