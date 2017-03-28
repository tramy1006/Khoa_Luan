<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use Image;
use App\Category;
use App\Lesson;
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
        
        return view('pages.home');
    }
   
   
    public function welcome()
    {
        $cate = Category::all();
        return view('welcome');
    }
      public function theloai($id)
    {
        $catt = Category::find($id);
        $less = Lesson::where('cate_id', $id)->paginate(5);
        return view('pages.cate', ['catt'=>$catt, 'less'=>$less]);
    }
    public function chitiet($id)
    {
        
        $less = Lesson::find($id);
        $lessnoibat = Lesson::where('noibat', 1)->take(4)->get();
        $lesslienquan = Lesson::where('cate_id', $less->cate_id)->take(4)->get();
        return view('pages.chitiet', ['less'=>$less, 'lessnoibat'=>$lessnoibat, 'lesslienquan'=>$lesslienquan]);
    }
    public function timkiem(Request $request)
    {
        $tukhoa = $request->tukhoa;
        $less = Lesson::where('title', 'like', '%$tukhoa%')->orWhere('tomtat', 'like', '%$tukhoa%')->orWhere('noidung', 'like', '%$tukhoa%')->take(30)->paginate(5);
        return view('pages.search', ['less'=>$less, 'tukhoa'=>$tukhoa]);
    }
   
   
    
     
}
