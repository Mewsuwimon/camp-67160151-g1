@extends('template.default')

@section('content')

<h1>Pokedex Create</h1>

<form action="{{ url('/pokedexs') }}" method="post">
    @csrf

    <label>Name</label>
    <input class="form-control" type="text" name="name">
    <label>Type</label>
    <input class="form-control" type="text" name="type">
    <label>Species</label>
    <input class="form-control" type="text" name="species">
    <label>Height</label>
    <input class="form-control" type="number" name="height">
    <label>Weight</label>
    <input class="form-control" type="number" name="weight">
    <label>HP</label>
    <input class="form-control" type="number" step="0.01" name="hp">
    <label>Attack</label>
    <input class="form-control" type="number" step="0.01" name="attack">
    <label>Defense</label>
    <input class="form-control" type="number" step="0.01" name="defense">
    <label>Image URL</label>
    <input class="form-control" type="text" name="image_url">
    <button class="btn btn-primary mt-2" type="submit">บันทึก</button>
</form>

<hr>

@include('pokedexs.table')

@endsection
