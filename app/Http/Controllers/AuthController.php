<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\post;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){

        $validated_data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($validated_data)){
            $request->session()->regenerate();
            return redirect()->route('home');
        }
        
        return back()->withErrors([
             'Şifre veya Parola Yanlış.',
        ])->onlyInput('email');
        
    }

    public function login_page(){
        return view('auth.login');
    }

    public function logout(Request $request)
    {

    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('home');
    }

    public function dashboard(){
        $post=post::orderByDesc('id')->first();
        $categories = category::withCount('get_posts')->get();  // Kategorilere ait post sayısını alıyoruz
        return view('dashboard', compact('categories','post'));
    }
}
