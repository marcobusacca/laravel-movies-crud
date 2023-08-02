@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <div class="">
                <h2 class="fw-bold">INSERISCI UN NUOVO FILM</h2>
                <a href="{{ route('movie.index')}}"  class="label">VEDI TUTTI I NOSTRI FUMETTI</a>
            </div>
        </div>
        <div>
            <div class="col-12 d-flex justify-content-center ">
                <form action="{{ route('movie.store')}}" method="POST" class="col-6">
                    @csrf
                    <div class="form-group mb-3">
                        <label class="control-label">Titolo</label>
                        <input type="text" id="title" class="form-control" placeholder="Titolo" name="title">
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Descrizione</label>
                        <input type="text" id="description" class="form-control" placeholder="Descrizione" name="description">
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Copertina online</label>
                        <input type="text" id="thumb" class="form-control" placeholder="Copertina online" name="thumb">
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Copertina online</label>
                        <input type="text" id="thumb2" class="form-control" placeholder="Copertina online" name="thumb2">
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Copertina locale</label>
                        <input type="text" id="cover_image" class="form-control" placeholder="Copertina locale" name="cover_image">
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Prezzo in €</label>
                        <input type="text" id="price" class="form-control" placeholder="0.00€" name="price">
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Serie</label>
                        <input type="text" id="series" class="form-control" placeholder="Serie" name="series">
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Data uscita</label>
                        <input type="date" id="sale_date" class="form-control" placeholder="Data uscita" name="sale_date">
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Tipo</label>
                        <input type="text" id="type" class="form-control" placeholder="Tipo" name="type">
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Artisti</label>
                        <input type="text" id="artists" class="form-control" placeholder="Artisti, separati da una virgola" name="artists">
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Scrittori</label>
                        <input type="text" id="writers" class="form-control" placeholder="Scrittori, separati da una virgola" name="writers">
                    </div>
                    <div class="d-flex">
                        <button class="label align-self-center" type="submit" > CREA </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection