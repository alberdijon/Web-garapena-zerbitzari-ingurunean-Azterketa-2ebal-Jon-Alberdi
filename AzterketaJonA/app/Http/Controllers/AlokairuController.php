<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AlokairuTaula;
use App\Models\Etxea;
use Illuminate\Http\Request;

class AlokairuController extends Controller
{
    public function show()
    {
        $alokairuak = \App\Models\AlokairuTaula::all();
        return view('alokairu-list', ['alokairuak' => $alokairuak]);
    }

    public function delete($id)
    {
        $alokairua = \App\Models\AlokairuTaula::findOrFail($id);
        $alokairua->delete();

        return redirect(to: '/alokairuak')->with('success', 'Alokairua ondo ezabatu da');
    }

    public function edit($id){
        $alokairua = AlokairuTaula::findOrFail($id);
        $etxeak = Etxea::all();
        return view('alokairuak-edit', ['alokairua' => $alokairua, 'etxeak' => $etxeak]);
    }

    public function update(Request $request, $id){
        $alokairua=AlokairuTaula::findOrFail($id);

        $data= $request->validate([
            'izena'=>'required',
            'etxea_id'=>'required',
        ]);

        $alokairua->update($data);

        return redirect('/alokairuak')->with('success', 'Alokairuaren datuak ondo eguneratu dira');
    }
}
