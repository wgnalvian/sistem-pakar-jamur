<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use App\Models\Condition;
use Illuminate\Http\Request;

class ConditionController extends Controller
{
    public function index(){
        $title = "Kondisi1";
        $conditions = Condition::get();
        return view('condition',compact('title','conditions'));
    }

    public function add(Request $request){

        $validated = $request->validate([
            'name' => 'required',
            'code' => 'required'
        ]);

        if($validated){

            Condition::create([
                'name' => $request->post('name'),
                'code' => $request->post('code')
            ]);
            Alert::success('Sukses', 'Gejala baru telah berhasil dibuat');
            return redirect()->back();

        }
        

    }
}
