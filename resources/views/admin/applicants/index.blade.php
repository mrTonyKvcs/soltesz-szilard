@extends('layouts.admin')

@section('content')
   <div class="row bg-light">
        <div class="container">
            <div class="col-md-12">
                <h1 class="text-secondary text-uppercase text-center py-5">Jelentkezők</h1>
            </div>
        </div>
    </div> 
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
                </tr>
            </thead>
            <tbody>
                @if(count($applicants) > 0)
                    @foreach($applicants as $applicant)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $applicant->training->title }}</td>
                            <td>{{ $applicant->name }}</td>
                            <td>{{ $applicant->email }}</td>
                            <td>{{ $applicant->phone_number }}</td>
                            <td>{{ $applicant->description }}</td>
                            <td>{{ $applicant->about_me }}</td>
                        </tr>
                    @endforeach
                @else
                    <p>Nincs jelentkező</p>
                @endif
            </tbody>
        </table>
@endsection
