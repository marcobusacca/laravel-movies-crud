@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12 text-center">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="fw-bold">Modifica "{{ $movie->name }}"</h2>
                <a href="{{ Route('movies.index') }}" class="btn btn-dark">Homepage</a>
            </div>
        </div>
        <div class="col-12 mb-5">
            <form action=" {{ Route('movies.update', $movie->id) }} " method="POST">
                @csrf
                @method('PUT')
                <div class="form-group border p-4">
                    <div class="row">
                        <div class="col-12 my-3">
                            <!-- Name -->
                            <label class="control-label my-3">Nome</label>
                            <input type="text" name="name" id="name" placeholder="Modifica il nome" class="form-control" value="{{ old('name') ?? $movie->name }}" required>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 my-3">
                            <!-- Img -->
                            <label class="control-label my-3">Immagine</label>
                            <input type="url" name="img" id="img" placeholder="Modifica l'immagine" class="form-control" value="{{ old('img') ?? $movie->img }}" required>
                            @error('img')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 my-3">
                            <!-- Genere -->
                            <label class="control-label my-3">Genere</label>
                            <input type="text" name="genre" id="genre" placeholder="Modifica il genere" class="form-control" value="{{ old('genre') ?? $movie->genre }}" required>
                            @error('genre')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 my-3">
                            <!-- Voto -->
                            <label class="control-label my-3">Voto</label>
                            <input type="number" min="1" max="10" name="vote" id="vote" placeholder="Modifica il voto" class="form-control" value="{{ old('vote') ?? $movie->vote }}" required>
                            @error('vote')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 my-3">
                            <!-- Linguaggio -->
                            <label class="control-label my-3">Linguaggio</label>
                            <select name="original_language" id="original_language" class="form-control" required>
                                <option>Seleziona un Linguaggio</option>
                                <option @selected(old('original_language', $movie->original_language)  == 'Italiano') value="Italiano">Italiano</option>
                                <option @selected(old('original_language', $movie->original_language)  == 'Inglese') value="Inglese">Inglese</option>
                                <option @selected(old('original_language', $movie->original_language)  == 'Francese') value="Francese">Francese</option>
                                <option @selected(old('original_language', $movie->original_language)  == 'Tedesco') value="Tedesco">Tedesco</option>
                                <option @selected(old('original_language', $movie->original_language)  == 'Spagnolo') value="Spagnolo">Spagnolo</option>
                                <option @selected(old('original_language', $movie->original_language)  == 'Altro') value="Altro">Altro</option>
                            </select>
                            @error('original_language')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 my-3">
                            <!-- Durata -->
                            <label class="control-label my-3">Durata</label>
                            <input type="number"  min="30" max="240" name="length" id="length" placeholder="Modifica la durata" class="form-control" value="{{ old('length') ?? $movie->length }}" required>
                            @error('length')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 text-center my-5">
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-warning">Modifica</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection