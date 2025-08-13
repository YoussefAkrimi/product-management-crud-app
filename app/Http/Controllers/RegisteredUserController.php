<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        // dd('hello');
        return view('auth.register');
    }
    public function store()
    {


        $attributes = request()->validate(([
             'name' => ['required'],
             'email' => ['required', 'email', 'max:254'],
 // 'password' => ['required', Password::min(5)->letters()->numbers()->max(254)], but instead we can use Laravel’s default password validation rules:
             // 'password' => ['required', Password::default()],
             // but for now we are gonna use this:
                 'password' => ['required', Password::min(6), 'confirmed'] // so for this confirmed , laravel is gonna look for an attribute or input with the same name plus _confirmation and make sure they match, in our case its password_confirmation
         ]));
        // create the user
        $user = User::create($attributes);
        // log in
        Auth::login($user);
        // redirect somwhere
        return redirect('/products');
    }
}
