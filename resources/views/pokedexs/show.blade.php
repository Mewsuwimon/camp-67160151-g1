@extends('template.default')

@section('content')

<div class="row justify-content-center mt-4 ">
    <div class="col-md-6">

        <div class="card shadow-lg border-0 rounded-4"
            style="background: linear-gradient(180deg,#F8FAFC,#EFF6FF);">

            <div class="card-body text-center p-4">

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

                <a href="{{ url('/pokedexs') }}" class="btn btn-success mt-3">
                    ← กลับไปหน้ารายการ
                </a>

            </div>
        </div>

    </div>
</div>

@endsection
