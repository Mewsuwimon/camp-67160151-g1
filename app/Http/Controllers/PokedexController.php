<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokedex;

class PokedexController extends Controller
{
    public function index()
    {
        $data['pokedexs'] = Pokedex::all();
        return view('pokedexs.index', $data);
    }

    public function create()
    {
        return view('pokedexs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'type' => 'required|string|max:50',
            'species' => 'required|string|max:100',
            'height' => 'required|numeric|min:0',
            'weight' => 'required|numeric|min:0',
            'hp' => 'required|integer|min:0',
            'attack' => 'required|integer|min:0',
            'defense' => 'required|integer|min:0',
            'image_url' => 'required|url',
        ]);

        Pokedex::create($request->all());

        return redirect('/pokedexs')
            ->with('success', 'เพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    public function show(string $id)
    {
        $data['pokedex'] = Pokedex::findOrFail($id);
        return view('pokedexs.show', $data);
    }

    public function edit(string $id)
    {
        $data['pokedex'] = Pokedex::findOrFail($id);
        return view('pokedexs.edit', $data);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'type' => 'required|string|max:50',
            'species' => 'required|string|max:100',
            'height' => 'required|numeric|min:0',
            'weight' => 'required|numeric|min:0',
            'hp' => 'required|integer|min:0',
            'attack' => 'required|integer|min:0',
            'defense' => 'required|integer|min:0',
            'image_url' => 'required|url',
        ]);

        $pokedex = Pokedex::findOrFail($id);
        $pokedex->update($request->all());

        return redirect('/pokedexs')
            ->with('success', 'อัปเดตข้อมูลเรียบร้อยแล้ว');
    }

    public function destroy(string $id)
    {
        Pokedex::findOrFail($id)->delete();

        return redirect('/pokedexs')
            ->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    }
}
