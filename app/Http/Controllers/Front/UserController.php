<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect()->to(route('homepage'));
    }

    public function login(Request $request){
        Auth::attempt(['email'=>$request->email,'password'=>$request->password]);
        return redirect()->to(route('homepage'));
    }

    public function priceRange(Request $request)
    {
        $min=min($request->priceRange);
        $max=max($request->priceRange);
        $value=['min'=>$min,'max'=>$max];
        return redirect()->to(route('productstore',['key'=>'price','value'=>$value]));
    }
}
