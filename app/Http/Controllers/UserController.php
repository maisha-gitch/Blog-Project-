<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Auth\Events\Login;

use function Laravel\Prompts\password;

class UserController extends Controller
{
    public function login(Request $request){
        $incomingFields = $request->validate([
            'username' => "required",
            'userpassword' => "required"

        ]);
        if(auth()->attempt(['name' => $incomingFields['username'] , "password" => $incomingFields["userpassword"]])) {
            $request->session()->regenerate();
            
        }
        return redirect('/');
        
        
    }


    public function logout(){
        auth()->logout();
        return redirect("/") ;
    }

    public function register(Request $request){
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3' , 'max:30' ],
            'email' => ['required' , 'email'],
            'password' => ['required', 'min:3' , 'max:40']
        ]);
        $incomingFields['passswoed'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        auth()->login($user) ;

        return redirect('/');
    }
}
