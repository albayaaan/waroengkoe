<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function create()
    {
        return view('menu.create');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $data['warung_id'] = 3;
        Menu::create($data);

        dd($data);
    }

    public function edit(Menu $menu)
    {
        return view('menu.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $menu->update($data);
        $menu->save();

        dd($data);
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        dd(['message' => 'success']);
    }
}
