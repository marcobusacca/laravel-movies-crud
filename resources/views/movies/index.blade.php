@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Genere</th>
                            <th scope="col">Voto</th>
                            <th scope="col">Azioni</th>                            
                        </tr>
                    </thead>
                    @foreach ($movies as $movie)  
                        <tbody>
                            <tr>
                                <th scope="row">{{ $movie->name }}</th>
                                <td>{{ $movie->genre }}</td>
                                <td>{{ $movie->vote }}</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{ route('movies.show', $movie->id )}}"><i class="fas fa-eye"></i></a>
                                    <a class="btn btn-warning btn-sm" href=""><i class="fas fa-pen"></i></a>
                                    <a class="btn btn-danger btn-sm" href=""><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection