@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <img class="img-show" src="{{ $movie->img }}" alt="{{ $movie->name }}">
                    <div class="card-body">
                        <h3 class="fw-bold">Titolo:<span class="text-danger">{{ $movie->name }}</span></h3>
                        <h3 class="fw-bold">Voto:<span class="text-info">{{ $movie->vote }}</span></h3>
                        <h3 class="fw-bold">Genere:<span class="text-success">{{ $movie->genre }}</span></h3>
                        <h3 class="fw-bold">Lingua:<span class="text-warning">{{ $movie->original_language }}</span></h3>
                        <h3 class="fw-bold">Durata:<span class="text-primary">{{ $movie->length }}</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection