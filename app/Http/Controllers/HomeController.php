<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use Image;
use App\Category;
class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $cate = Category::all();
        view()->share('cate', $cate);
    }

    public function index()
    {
        
        return view('home');
    }
   
   
    public function welcome()
    {
        $cate = Category::all();
        return view('welcome');
    }
   
    
     
}
