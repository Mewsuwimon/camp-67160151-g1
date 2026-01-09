@extends('template.default')
@section('content')

<h1 style="color: #22C55E;font-weight:bold;">Pokedex Update</h1>

<form action="{{ url('/pokedexs/'.$pokedex->id) }}" method="post">
    @csrf
    @method('PUT')

    <label>Name</label>
    <input class="form-control" name="name" value="{{ $pokedex->name }}">
    <label>Type</label>
    <input class="form-control" name="type" value="{{ $pokedex->type }}">
    <label>Species</label>
    <input class="form-control" name="species" value="{{ $pokedex->species }}">
    <label>Height</label>
    <input class="form-control" type="number" step="0.1"
        name="height" value="{{ $pokedex->height }}">
    <label>Weight</label>
    <input class="form-control" type="number" step="0.1"
        name="weight" value="{{ $pokedex->weight }}">
    <label>HP</label>
    <input class="form-control" type="number" name="hp"
        value="{{ $pokedex->hp }}">
    <label>Attack</label>
    <input class="form-control" type="number" name="attack"
        value="{{ $pokedex->attack }}">
    <label>Defense</label>
    <input class="form-control" type="number" name="defense"
        value="{{ $pokedex->defense }}">
    <label>Image URL</label>
    <input class="form-control" type="url" name="image_url"
        value="{{ $pokedex->image_url }}">
    <button class="btn btn-success mt-2">บันทึก</button>
</form>

@include('pokedexs.table')

@endsection
