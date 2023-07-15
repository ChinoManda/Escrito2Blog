<?php

namespace App\Http\Controllers;
use App\Models\author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class AuthorController extends Controller
{
    public function Register(Request $request){
        
        $validation = self::RegisterValidation($request);

        if ($validation->fails())
        return $validation->errors();
    
        return $this -> Registercreate($request);
    }

    public function RegisterValidation(Request $request){
        $validation = Validator::make($request->all(),[
            'name' => 'required | alpha:ascii | unique:author',
            'email' => 'email | required | unique:author',
            'password' =>'required | confirmed'
        ]);
        return $validation;
    }

    public function Registercreate(Request $request){
        $Author = new author();
        
        $Author -> name = $request ->post("name"); 
        $Author -> email = $request ->post("email");
        $Author -> password = Hash::make($request -> post("password"));

        $Author -> save();
        return redirect("/login")-> with("created",true);
    }

    public function Login(Request $request){
 
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) 
            return redirect("/list");
            
        return redirect("/login")->with("failed",true);
    }

    public function Logout(Request $request){
        Auth::logout();
        return redirect("/")->with("logout",true);
    }
}
