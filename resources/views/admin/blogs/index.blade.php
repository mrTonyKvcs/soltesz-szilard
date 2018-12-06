@extends('layouts.admin')

@section('content')
    <div class="row bg-light">
        <div class="container">
            <div class="col-md-12">
                <h1 class="text-secondary text-uppercase text-center py-5">olvasmányok</h1>
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
                <form class="mb-5" action="{{ URL::to('admin/olvasmanyok') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="title" class="form-control" id="exampleInput1" aria-describedby="titleHelp" placeholder="Cím" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input class="form-control" type="date" name="expired_at" placeholder="Datum" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="description" class="form-control" cols="30" rows="10" placeholder="Tartalom"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Képfeltöltés: </label>
                        <input name="img_path" type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    
                    <button type="submit" class="btn btn-success col-md-12 text-uppercase text-center">új olvasmány feldolgozása</button>
                </form>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr class="text-uppercase">
                    <th scope="col">#</th>
                    <th scope="col">cím</th>
                    <th scope="col" class="text-center">Szerkeszt</th>
                    <th scope="col" class="text-center">töröl</th>
                </tr>
            </thead>
            <tbody>
                @foreach($blogs as $blog)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $blog->title }}</td>
                        <td class="text-center">
                            <a href="{{ route('olvasmanyok.edit',$blog->id) }}">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <form action="{{ url('admin/olvasmanyok/' . $blog->id) }}" method="post">
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
