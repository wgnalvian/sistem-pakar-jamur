<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Desease;
use App\Models\DeseaseSymtom;
use App\Models\Symtom;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class DeseaseController extends Controller
{
    public function index(){
        $deseases = Desease::get();
        $symtoms = Symtom::get();
        return view('desease', ['deseases' => $deseases,'title' => 'Penyakit','symtoms' => $symtoms]);
    }

    public function add(Request $request){
     
        $validated = $request->validate([
            'name' => 'required',
            'code' => 'required',
            'cf' => 'required',
            'symtom' => 'required',
            'treatment' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = public_path('images/');
        !is_dir($path) &&
            mkdir($path, 0777, true);
        
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move($path, $imageName);


        if($validated){

           
            $desease = Desease::create([
                'desease' => $request->post('name'),
                'description' => $request->post('description'),
                'code' => $request->post('code'),
                'treatment' => $request->post('treatment'),
                'image' => $imageName
            ]);

           DeseaseSymtom::create([
            'desease_id' => $desease->id,
            'symtoms_id' => $request->post('symtom'),
            'cf' => $request->post('cf')
           ]);

            FacadesAlert::success('Berhasil', 'Penyakit berhasil ditambahkan');
            return redirect()->back();
        }
    }

    public function delete(Request $request){
        Desease::where('id',$request->post('id'))->delete();
        FacadesAlert::success('Berhasil', 'Penyakit berhasil dihapus');
        return redirect()->back();
    }

    public function update(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'code' => 'required'
        ]);

        if($validated){
            Desease::where('id',$request->post('id'))->update([
                'desease' => $request->post('name'),
                'code' => $request->post('code')
            ]);

            FacadesAlert::success('Berhasil', 'Penyakit berhasil diubah');
            return redirect()->back();
        }
    }

    public function detail($id){
        $deseaseSymtoms = DeseaseSymtom::where('desease_id',$id)->get();
       
        $symtoms = Symtom::all();
        return view('desease-detail', ['deseaseSymtoms' => $deseaseSymtoms,'title' => 'Detail Penyakit','symtoms' => $symtoms]);
    }

    public function deleteDetail(Request $request){
        DeseaseSymtom::where('id',$request->post('id'))->delete();
        FacadesAlert::success('Berhasil', 'Gejala berhasil dihapus');
        return redirect()->back();
    }

    public function addDetail(Request $request){
        $validated = $request->validate([
            'symtom_id' => 'required',
            'cf' => 'required|numeric'
        ]);
        DeseaseSymtom::create([
            'cf' => $request->post('cf'),
            'desease_id' => $request->post('desease_id'),
            'symtoms_id' => $request->post('symtom_id')
        
        ]);
        FacadesAlert::success('Berhasil', 'Gejala berhasil ditambah');
        return redirect()->back();
    }
    

    


    
}
