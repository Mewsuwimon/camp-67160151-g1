<h1 style="color:#2A75BB;font-weight:bold;"> Pokedex Lists</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>type</th>
            <th>species</th>
            <th>height</th>
            <th>weight</th>
            <th>hp</th>
            <th>attack</th>
            <th>defense</th>
            <th>image</th>
            <th>จัดการ</th>
        </tr>
    </thead>


    <?php foreach($pokedexs as $item) { ?>
    <tr>
        <td>{{ $item->id }}</td>

        <td>
            <a href="{{ url('/pokedexs/' . $item->id) }}" class="fw-bold text-decoration-none">
                {{ $item->name }}
            </a>
        </td>

        <td>{{ $item->type }}</td>
        <td>{{ $item->species }}</td>
        <td>{{ number_format($item->height, 1) }} m</td>
        <td>{{ number_format($item->weight, 1) }} kg</td>
        <td>{{ $item->hp }}</td>
        <td>{{ $item->attack }}</td>
        <td>{{ $item->defense }}</td>

        <td>
            <img src="{{ $item->image_url }}" width="60">
        </td>

        <td>
            <a class="btn btn-warning btn-sm"
            href="{{ url('/pokedexs/' . $item->id . '/edit') }}">
                แก้ไข
            </a>

            <form style="display:inline-block"
                action="{{ url('/pokedexs/' . $item->id) }}"
                method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-sm">ลบ</button>
            </form>
        </td>
    </tr>
    <?php } ?>
</table>
