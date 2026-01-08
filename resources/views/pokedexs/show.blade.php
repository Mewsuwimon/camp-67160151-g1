@extends('template.default')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="card shadow-sm">
            <div class="card-body text-center">

                <h1 class="mb-3">{{ $pokedex->name }}</h1>

                <img
                    src="{{ $pokedex->image_url }}"
                    width="220"
                    class="mb-3"
                    alt="{{ $pokedex->name }}"
                >

                <p><strong>Type:</strong> {{ $pokedex->type }}</p>
                <p><strong>Species:</strong> {{ $pokedex->species }}</p>

                <p>
                    <strong>Height:</strong>
                    {{ number_format($pokedex->height, 2) }} m
                </p>

                <p>
                    <strong>Weight:</strong>
                    {{ number_format($pokedex->weight, 2) }} kg
                </p>

                <p><strong>HP:</strong> {{ $pokedex->hp }}</p>
                <p><strong>Attack:</strong> {{ $pokedex->attack }}</p>
                <p><strong>Defense:</strong> {{ $pokedex->defense }}</p>

                <a href="{{ url('/pokedexs') }}" class="btn btn-secondary mt-3">
                    ← กลับไปหน้ารายการ
                </a>

            </div>
        </div>

    </div>
</div>

@endsection
