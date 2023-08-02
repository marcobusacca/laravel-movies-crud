@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center mt-3">
            <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                <h2 class="fw-bold">INSERISCI UN NUOVO FILM</h2>
            </div>
        </div>
        <div>
            <div class="col-12 d-flex justify-content-center ">
                <form action="{{ route('movies.store')}}" method="POST" class="col-6 justify-content-center">
                    @csrf
                    <div class="form-group mb-3">
                        <label class="control-label">Titolo: </label>
                        <input type="text" id="name" class="form-control" placeholder="Titolo del film" name="name" value="{{old('name')}}">
                        @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Copertina:</label>
                        <input type="url" id="img" class="form-control" placeholder="Incolla qui lo url" name="img" value="{{old('img')}}">
                        @error('img')
                                <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Genere:</label>
                        <input type="text" id="genre" class="form-control" placeholder="Inerisci i generi separati da una virgola" name="genre" value="{{old('genre')}}">
                        @error('genre')
                                <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Valutazione:</label>
                        <input type="number" id="vote" class="form-control" min="1" max="10" placeholder="da 1 a 10 se presente" name="vote" value="{{old('vote')}}">
                        @error('vote')
                                <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Lingua originale:</label>
                        <select class="form-select" id="original_language" name="original_language" >
                            <option >Seleziona la lingua</option>
                            <option @selected(old('original_language') == 'Italiano') value="Italiano">Italiano</option>
                            <option @selected(old('original_language') == 'Inglese') value="Inglese">Inglese</option>
                            <option @selected(old('original_language') == 'Francese') value="Francese">Francese</option>
                            <option @selected(old('original_language') == 'Tedesco') value="Tedesco">Tedesco</option>
                            <option @selected(old('original_language') == 'Spagnolo') value="Spagnolo">Spagnolo</option>
                            <option @selected(old('original_language') == 'Altro') value="Altro">Altro</option>
                            @error('original_language')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Durata:</label>
                        <input type="number" id="length" class="form-control" min="30" max="240" placeholder="Inserisci il minutaggio" name="length" value="{{old('length')}}">
                        @error('original_language')
                                <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <button class="label align-self-center btn btn-dark" type="submit"> CREA </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection