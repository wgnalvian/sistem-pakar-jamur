<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DeseaseSymtom;
use App\Models\Symtom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class SymtomController extends Controller
{
    public function index(){
        $symtoms = Symtom::get();
      
        return view('symtom', ['symtoms' => $symtoms,'title' => 'Gejala']);
    }

    public function delete(){
        DeseaseSymtom::truncate();
        $symtom = Symtom::find(request()->id);
        $symtom->delete();
        Alert::success('Sukses', 'Gejala telah berhasil dihapus');
        return redirect()->back();
    }

    public function update(Request $request){
        $symtom = Symtom::find($request->post('id'));
        $symtom->name = $request->post('name');
        $symtom->name = $request->post('code');
        $symtom->save();
        Alert::success('Sukses', 'Gejala telah berhasil diubah');
        return redirect()->back();
    }

    public function add(Request $request){

        $validated = $request->validate([
            'name' => 'required',
            'code' => 'required'
        ]);

        if($validated){

            Symtom::create([
                'name' => $request->post('name'),
                'code' => $request->post('code')
            ]);
            Alert::success('Sukses', 'Gejala baru telah berhasil dibuat');
            return redirect()->back();

        }
        

    }
}
