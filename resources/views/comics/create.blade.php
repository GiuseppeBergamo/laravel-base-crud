@extends('layouts.main')

@section('main-content')



<div class="row bg-success rounded">
    <h1 class="text-white text-center mb-5">Aggiungi un fumetto</h1>
    <div class="col-12">
        
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="row text-white">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Nome Fumetto</label>
                        <input type="text" class="form-control" id="title" placeholder="Nome Fumetto" name="title">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="series" class="form-label">Nome Serie</label>
                        <input type="text" class="form-control" id="series" placeholder="Nome Serie" name="series">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="text" class="form-control" id="thumb" placeholder="Url immagine" name="thumb">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="number" class="form-control" id="price" placeholder="Prezzo" name="price" min="0">
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo</label>
                        <input type="text" class="form-control" id="type" placeholder="Es. Comic Book, Graphic Novel" name="type">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data d'uscita</label>
                        <input type="text" class="form-control" id="sale_date" placeholder="2020-10-06" name="sale_date">
                    </div>
                </div>

            </div>
            <div class="row">
            <div class="col-12 my-2 d-flex justify-content-between">
                <a href="{{ route('comics.index') }}" class="btn btn-secondary">Torna alla pagina fumetti</a>
                <button type="submit" class="btn btn-dark">Salva</button>
            </div>

        </div>

        </form>

        
    </div>
</div>

@endsection