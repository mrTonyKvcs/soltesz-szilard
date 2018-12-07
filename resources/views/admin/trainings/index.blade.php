@extends('layouts.admin')

@section('content')
    <div class="row bg-light">
        <div class="container">
            <div class="col-md-12">
                <h1 class="text-secondary text-uppercase text-center py-5">események</h1>
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
                <form action="{{ route('esemenyek.store') }}" method="POST" enctype="multipart/form-data" class="mb-5">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input name="title" type="text" class="form-control" id="exampleInput1" aria-describedby="titleHelp" placeholder="Cím" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input name="locale" type="text" class="form-control" placeholder="Helyszín">
                        </div>
                        <div class="form-group col-md-6">
                            <input name="type" type="text" class="form-control" placeholder="Esemény típusa">
                        </div>
                        <div class="form-group col-md-3">
                            <input name="max_person" type="text" class="form-control" placeholder="Max. létszám">
                        </div>
                        <div class="form-group col-md-3">
                            <input name="price" type="text" class="form-control" placeholder="Ár">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <input name="started_at" class="form-control" type="date" placeholder="Időpont">
                        </div>
                        <div class="form-group col-md-4">
                            <input name="hour" class="form-control" type="time" placeholder="Időpont">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="description" class="form-control" name="" cols="30" rows="10" placeholder="Tartalom"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Képfeltöltés: </label>
                        <input name="image_path" type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    
                    <button type="submit" class="btn btn-success col-md-12 text-uppercase text-center">új esemény feldolgozása</button>
                </form>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr class="text-uppercase">
                    <th scope="col">#</th>
                    <th scope="col">Neve</th>
                    <th scope="col">Dátum</th>
                    <th scope="col" class="text-center">Szerkeszt</th>
                    <th scope="col" class="text-center">töröl</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dates as $date)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $date->training->title }} @if($date->started_at < \Carbon\Carbon::now()) <small class="text-uppercase text-danger pl-3">lejárt esemény</small> @endif</td>
                        <th scope="row">{{ $date->started_at->format('Y-m-d') }}</th>
                        <td class="text-center">
                            <a href="{{ route('esemenyek.edit', $date->training->id) }}">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <form action="{{ route('esemenyek.destroy', $date->training->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn text-danger btn-sm" type="submit">                                <i class="fas fa-trash"></i> </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
