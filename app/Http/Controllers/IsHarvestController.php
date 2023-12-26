<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;
use App\Http\Controllers\Controller;
use App\Models\Condition;
use App\Models\IsHarvest;
use App\Models\IsHarvestCondition;
use Illuminate\Http\Request;

class IsHarvestController extends Controller
{
    public function index()
    {
        $isHarvests = IsHarvest::get();
        $conditions = Condition::get();
        $title = "Apakah Layak Panen? ";
        return view('isharvest', compact('isHarvests', 'conditions','title'));
    }
    public function add(Request $request){
     
        $validated = $request->validate([
            'name' => 'required',
            'code' => 'required',
            'cf' => 'required',
            'condition' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = public_path('images/');
        !is_dir($path) &&
            mkdir($path, 0777, true);
        
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move($path, $imageName);


        if($validated){

           
            $desease = IsHarvest::create([
                'isharvest' => $request->post('name'),
                'description' => $request->post('description'),
                'code' => $request->post('code'),
                'image' => $imageName
            ]);

           IsHarvestCondition::create([
            'isharvest_id' => $desease->id,
            'condition_id' => $request->post('condition'),
            'cf' => $request->post('cf')
           ]);

            FacadesAlert::success('Berhasil', 'Penyakit berhasil ditambahkan');
            return redirect()->back();
        }
    }
    public function detail($id){
        $isharvestConditions = IsHarvestCondition::where('isharvest_id',$id)->get();
        $conditions = Condition::all();
        return view('isharvest-detail', ['isharvestConditions' => $isharvestConditions,'title' => 'Detail Penyakit','conditions' => $conditions]);
    }

}
