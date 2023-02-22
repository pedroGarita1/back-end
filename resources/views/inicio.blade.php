@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card bg-dark text-white">
                <div class="card-body">
                    <h5 class="card-title text-center">Reistration of people</h5>
                    <p class="card-text">
                        <table class="table table-dark table-responsive-sm table-condensed">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">BirthDate</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($people as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td>{{ $item->nombre }}</td>
                                    <td>{{ $item->apellido }}</td>
                                    <td>{{ $item->fechaNacimiento }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection