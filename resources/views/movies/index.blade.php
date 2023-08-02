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
                    <tbody>
                        @foreach ($movies as $movie)  
                            <tr>
                                <th scope="row">{{ $movie->name }}</th>
                                <td>{{ $movie->genre }}</td>
                                <td>{{ $movie->vote }}</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{ route('movies.show', $movie->id )}}"><i class="fas fa-eye"></i></a>
                                    <a class="btn btn-warning btn-sm" href=""><i class="fas fa-pen"></i></a>
                                    <form class="d-inline-block" action="{{ route('movies.destroy', $movie->id) }}" onsubmit="return confirm('Sei sicuro di voler cancellare questo fumetto?')" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection