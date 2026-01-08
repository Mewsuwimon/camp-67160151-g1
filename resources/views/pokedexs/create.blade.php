@extends('template.default')

@section('content')

<h1>เพิ่มข้อมูล Pokémon</h1>

<form action="{{ url('/pokedexs') }}" method="post">
    @csrf

    {{-- Name --}}
    <label>Name</label>
    <input class="form-control mb-2"
        type="text"
        name="name"
        value="{{ old('name') }}"
        required>

    {{-- Type --}}
    <label>Type</label>
    <input class="form-control mb-2"
        type="text"
        name="type"
        value="{{ old('type') }}"
        required>

    {{-- Species --}}
    <label>Species</label>
    <input class="form-control mb-2"
        type="text"
        name="species"
        value="{{ old('species') }}"
        required>

    {{-- Height --}}
    <label>Height (เมตร)</label>
    <input class="form-control mb-2"
        type="number"
        step="0.01"
        name="height"
        placeholder="เช่น 0.8"
        value="{{ old('height') }}"
        required>

    {{-- Weight  --}}
    <label>Weight (กิโลกรัม)</label>
    <input class="form-control mb-2"
        type="number"
        step="0.01"
        name="weight"
        placeholder="เช่น 5.6"
        value="{{ old('weight') }}"
        required>

    {{-- HP --}}
    <label>HP</label>
    <input class="form-control mb-2"
        type="number"
        step="1"
        name="hp"
        value="{{ old('hp') }}"
        required>

    {{-- Attack --}}
    <label>Attack</label>
    <input class="form-control mb-2"
        type="number"
        step="1"
        name="attack"
        value="{{ old('attack') }}"
        required>

    {{-- Defense --}}
    <label>Defense</label>
    <input class="form-control mb-2"
        type="number"
        step="1"
        name="defense"
        value="{{ old('defense') }}"
        required>

    {{-- Image URL --}}
    <label>Image URL</label>
    <input class="form-control mb-3"
        type="url"
        name="image_url"
        placeholder="https://..."
        value="{{ old('image_url') }}"
        required>

    <button class="btn btn-success">บันทึก</button>
    <a href="{{ url('/pokedexs') }}" class="btn btn-secondary">ย้อนกลับ</a>
</form>

@endsection
