@extends('layouts.admin')

@section('content')
    <div class="row bg-light">
        <div class="container">
            <div class="col-md-12">
                <h1 class="text-secondary text-uppercase text-center py-5">{{ $training->title }}</h1>
            </div>
        </div>
    </div>
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
                <form action="{{ route('esemenyek.update', $training->id) }}" method="POST" enctype="multipart/form-data" class="mb-5">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input name="title" type="text" class="form-control" id="exampleInput1" aria-describedby="titleHelp" placeholder="Cím" value="{{ $training->title }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input name="locale" type="text" class="form-control" placeholder="Helyszín"value="{{ $training->locale }}" >
                        </div>
                        <div class="form-group col-md-6">
                            <input name="type" type="text" class="form-control" placeholder="Esemény típusa" value="{{ $training->type }}">
                        </div>
                        <div class="form-group col-md-3">
                            <input name="max_person" type="text" class="form-control" placeholder="Max. létszám" value="{{ $training->max_person }}">
                        </div>
                        <div class="form-group col-md-3">
                            <input name="price" type="text" class="form-control" placeholder="Ár" value="{{ $training->price }}">
                        </div>
                    </div>
                    <div class="form-row">
                        @foreach($training->dates as $date)
                            <div class="form-group col-md-8">
                                <input name="started_at" class="form-control" type="date" placeholder="Időpont" value="{{ $date->started_at->format('Y-m-d') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <input name="hour" class="form-control" type="time" placeholder="Időpont" value="{{ $date->hour }}">
                            </div>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <textarea name="description" class="form-control" cols="30" rows="10" value="{{ $training->description }}">{{ $training->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            
                            <div class="col-md-6">
                                <img class="img-fluid" src="/{{ $training->image_path }}" alt="">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleFormControlFile1">Képcsere: </label>
                                <input name="image_path" type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success col-md-12 text-uppercase text-center">új esemény feldolgozása</button>
                </form>
            </div>
        </div>
    </div>
@endsection
