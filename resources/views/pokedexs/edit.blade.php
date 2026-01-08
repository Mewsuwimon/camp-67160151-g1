<h1>แก้ไขข้อมูล Pokémon</h1>

<form action="{{ url('/pokedexs/' . $pokedex->id) }}" method="post">
    @csrf
    @method('put')

    <input class="form-control mb-2" name="name" value="{{ old('name', $pokedex->name) }}">

    <input class="form-control mb-2" name="type" value="{{ old('type', $pokedex->type) }}">

    <input class="form-control mb-2" name="species" value="{{ old('species', $pokedex->species) }}">

    <input class="form-control mb-2"
        type="number"
        step="0.01"
        name="height"
        value="{{ old('height', $pokedex->height) }}">

    <input class="form-control mb-2"
        type="number"
        step="0.01"
        name="weight"
        value="{{ old('weight', $pokedex->weight) }}">

    <input class="form-control mb-2"
        type="number"
        name="hp"
        value="{{ old('hp', $pokedex->hp) }}">

    <input class="form-control mb-2"
        type="number"
        name="attack"
        value="{{ old('attack', $pokedex->attack) }}">

    <input class="form-control mb-2"
        type="number"
        name="defense"
        value="{{ old('defense', $pokedex->defense) }}">

    <input class="form-control mb-2"
        type="url"
        name="image_url"
        value="{{ old('image_url', $pokedex->image_url) }}">

    <button class="btn btn-primary">อัปเดต</button>
</form>
