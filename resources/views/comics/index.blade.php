@extends('layouts.main')


@section('main-content')
<div class="row row-cols-4 g-4">           
    @foreach($comics as $comic)
        <div class="col text-center">
            <a href="{{ route('comics.show', $comic->id) }}" class="text-decoration-none text-dark">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid">
                <p class="text-uppercase fw-bold">{{ $comic->title }}</p>
            </a>
        </div>
    @endforeach
</div>

<div class="row">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <a href="{{ route('comics.create') }}" class="btn btn-success btn-lg">Aggiungi un fumetto</a>
    </div>
</div>

@endsection