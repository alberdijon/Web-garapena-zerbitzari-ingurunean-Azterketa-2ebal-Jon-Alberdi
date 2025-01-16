<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Etxea;
use Illuminate\Http\Request;

class EtxeaController extends Controller
{
    public function show()
    {
        $etxeak = \App\Models\Etxea::all();
        return view('etxeak-list', ['etxeak' => $etxeak]);
    }

    public function edit($id){
        $etxea = Etxea::findOrFail($id);
        return view('edit', ['etxea' => $etxea,]);
    }

    public function update(Request $request, $id){
        $etxea=Etxea::findOrFail($id);

        $data= $request->validate([
            'helbidea'=>'required',
            'logelaKopurua'=>'required',
            'eraikuntzaUrtea'=>'required',
        ]);

        $etxea->update($data);

        return redirect('/')->with('success', 'Etxearen datuak ondo eguneratu dira');
    }
}
