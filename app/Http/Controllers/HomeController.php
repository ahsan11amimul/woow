<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $user=Auth::user(); 
        $posts=Post::where('hide',false)->paginate(6);
        $role=$user->role_id;
        if($role==1)
        {  
            return view('home.author',compact('posts'));
        }else
        {    
            return view('home.admin',compact('posts'));
        }
    }
}
