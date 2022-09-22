@extends('layouts.main')

@section('main-content')

<div class="row">

    <div class="col-12 d-flex justify-content-center align-items-center text-center">
        <div class="card" style="width: 18rem;">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">{{ $comic->description }}</p>
                <p>Prezzo: {{ $comic->price }}$</p>
                <p>Serie: {{ $comic->series }}</p>
                <p>Genere: {{ $comic->type }}</p>
                <p>Data di uscita: {{ $comic->sale_date }}</p>
                <a href="{{ route('comics.index') }}" class="btn btn-success">Torna indietro</a>
            </div>
        </div>
    </div>

</div>


@endsection