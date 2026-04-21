<?php

namespace App\Http\Controllers\Auth2;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Log;

class AuthController extends Controller
{
    public function index(){
        return view('auth2/login');
    }

    public function store(Request $request){
       $user =  Auth::attempt([
        'email' => $request->email,
        'password' => $request->password,
       ]);
       if($user){
         return response()->json(['message' => 'user logged in successfully.'], 200);
       } else {
            return response()->json(['message' => 'some think went wrong.'], 401);
       }
       
    }

    public function resForm(){
        return view('auth2/res');
    }

    public function storeRes(Request $request){
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
          
        event(new Registered($user));
        \Log::info('Event fired success fully');

        
        return true;

    }

    public function logout(){
         Auth::logout();
    }
}
