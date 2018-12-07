@extends('layouts.admin')

@section('content')
   <div class="row bg-light">
        <div class="container">
            <div class="col-md-12">
                <h1 class="text-secondary text-uppercase text-center py-5">Jelentkezők</h1>
            </div>
        </div>
    </div> 
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

        </div>
    </div>
    @if(count($applicants) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Esemény Neve</th>
                    <th scope="col">Név</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefonszám</th>
                    <th scope="col">Röviden írd meg miért jelentkeztél?</th>
                    <th scope="col">Mondj magadról pár gondolatot!</th>
                    <th scope="col">TÖRÖL</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($applicants as $applicant)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $applicant->training->title }}</td>
                            <td>{{ $applicant->name }}</td>
                            <td>{{ $applicant->email }}</td>
                            <td>{{ $applicant->phone_number }}</td>
                            <td>{{ $applicant->description }}</td>
                            <td>{{ $applicant->about_me }}</td>
                            <td class="text-center align-self-center">
                                <form action="{{ url('admin/jelentkezok/' . $applicant->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn text-danger btn-sm" type="submit">                                <i class="fas fa-trash"></i> </button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    @else
        <p class="text-uppercase mt-5 text-center">Nincs jelentkező</p>
    @endif
@endsection
