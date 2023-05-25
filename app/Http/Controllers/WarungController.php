<?php

namespace App\Http\Controllers;

use App\Models\Warung;
use Illuminate\Http\Request;

class WarungController extends Controller
{
    public function create()
    {
        return view('warung.create');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'location' => 'required',
            'description' => 'required',
        ]);

        $data['seller_id'] = 5;
        Warung::create($data);

        dd($data);
    }

    public function edit(Warung $warung)
    {
        return view('warung.edit', compact('warung'));
    }

    public function update(Request $request, Warung $warung)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'location' => 'required',
            'description' => 'required',
        ]);

        $warung->update($data);
        $warung->save();

        dd($data);
    }

    public function destroy(Warung $warung)
    {
        $warung->delete();
        dd(['message' => 'success']);
    }
}
