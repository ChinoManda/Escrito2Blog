<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\post;

class PostController extends Controller
{
    public function List(Request $request){

        return view("listPost",[ 
            'post' => post::all()
        ]);
    }

    public function Create(Request $request){
        
    }
}
