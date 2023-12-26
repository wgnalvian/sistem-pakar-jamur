<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signUp(Request $request){
       
        $validated = $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required|email'
        ]);

        
        if($validated){

            $passHash = Hash::make($request->post('password'));
            User::create([
                'name' => $request->post('name'),
                'password' => $passHash,
                'email' => $request->post('email')
            ]);

            return redirect()->to('/sign-in');

        }

    }
    
    public function signIn(Request $request){

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validated){

            $user = User::where('email',$request->post('email'))->first();

            if($user && Hash::check($request->post('password'),$user->password)){
                session()->put('user',$user);
            
                return redirect()->to('/');
                
            }else {
                return redirect()->back()->with('error','Invalid credentials');
            }

        }

    }
}
