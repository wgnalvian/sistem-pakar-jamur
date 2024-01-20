<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Condition;
use App\Models\Desease;
use App\Models\DeseaseSymtom;
use App\Models\IsHarvest;
use App\Models\IsHarvestCondition;
use App\Models\Symtom;
use App\Models\UserCondition;
use App\Models\UserSymtom;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AlternativeController extends Controller
{
    public function index()
    {
        $user = session()->get('user');
        $ds = Desease::all();
        $results = [];
        foreach ($ds as $d) {
            $cfGabungan = [];
            foreach ($d->symtoms as $s) {
                $usy =  UserSymtom::where('users_id', $user->id)->where('symtoms_id', $s->id)->first();
                $dsy =  DeseaseSymtom::where('desease_id', $d->id)->where('symtoms_id', $s->id)->first();
                array_push($cfGabungan, (float) $usy->cf * (float) $dsy->cf);
            }
            $result = 0;
            $isOld = false;
            for ($i = 0; $i < count($cfGabungan); $i++) {
                if (($i + 1) <= count($cfGabungan) - 1) {
                    if ($isOld == false) {
                        $result += $cfGabungan[$i]  + $cfGabungan[$i + 1] * (1 - $cfGabungan[$i]);
                        $isOld = true;
                    } else {
                        $result = $result  + $cfGabungan[$i + 1] * (1 - $result);
                    }
                }
            }
            $result = $result * 100;
            $results[$d->id] = $result;
        }
        arsort($results);
        $desease = Desease::find(array_key_first($results));
       
        return view('alternative.index', ['title' => 'Hasil Perhitungan', 'desease' => $desease, 'result' => $results[array_key_first($results)],'symtoms' => UserSymtom::where('users_id', $user->id)->get()]);
    }

    public function indexIsharvest()
    {
        $user = session()->get('user');
        $ds = IsHarvest::all();
        $results = [];
        foreach ($ds as $d) {
            $cfGabungan = [];
           
            foreach ($d->condition as $s) {
                $usy =  UserCondition::where('users_id', $user->id)->where('condition_id', $s->id)->first();
                $dsy =  IsHarvestCondition::where('isharvest_id', $d->id)->where('condition_id', $s->id)->first();
                array_push($cfGabungan, (float) $usy->cf * (float) $dsy->cf);
            }
            $result = 0;
            $isOld = false;
            for ($i = 0; $i < count($cfGabungan); $i++) {
                if (($i + 1) <= count($cfGabungan) - 1) {
                    if ($isOld == false) {
                        $result += $cfGabungan[$i]  + $cfGabungan[$i + 1] * (1 - $cfGabungan[$i]);
                        $isOld = true;
                    } else {
                        $result = $result  + $cfGabungan[$i + 1] * (1 - $result);
                    }
                }
            }
            $result = $result * 100;
            $results[$d->id] = $result;
        }
        arsort($results);
        $isharvest = IsHarvest::find(array_key_first($results));
        return view('alternative.indexIsHarvest', ['title' => 'Hasil Perhitungan', 'isharvest' => $isharvest, 'result' => $results[array_key_first($results)]]);
    }
    public function addView()
    {
        $symtoms = Symtom::all();
        $title = "Pilih Gejala";
        return view('alternative.add', ['symtoms' => $symtoms, 'title' => $title]);
    }

    public function add(Request $request)
    {
        $data = $request->post();
        UserSymtom::truncate();
        foreach ($data as  $key => $value) {
            $user = session()->get('user');
            if ($key != "_token") {
                UserSymtom::create([
                    'users_id' => $user->id,
                    'symtoms_id' => $key,
                    'cf' => $value == "Pilih Kondisi" ? "0" : $value
                ]);
            }
        }
        Alert::success('Berhasil', 'Alternatif berhasil ditambahkan');
        return redirect()->to('/alternative');
    }

    public function addViewIsharvest()
    {
        $conditions = Condition::all();
        $title = "Pilih Kondisi";
        return view('alternative.addIsHarvest', ['conditions' => $conditions, 'title' => $title]);
    }

    public function addIsHarvest(Request $request)
    {
        $data = $request->post();
        UserCondition::truncate();
        foreach ($data as  $key => $value) {
            $user = session()->get('user');
            if ($key != "_token") {
                UserCondition::create([
                    'users_id' => $user->id,
                    'condition_id' => $key,
                    'cf' =>  $value == "Pilih Kondisi" ? "0" : $value
                ]);
            }
        }
        Alert::success('Berhasil', 'Alternatif berhasil ditambahkan');
        return redirect()->to('/alternative/isharvest');
    }
}
