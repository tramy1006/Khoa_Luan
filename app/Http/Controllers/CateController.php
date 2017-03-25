<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;

class CateController extends Controller
{
    public function getList()
    {
    	$cate = Category::all();
    	return view('cate.show', ['cate'=>$cate]);
    }
    public function getShow()
    {
        $cate = Category::all();
        return view('cate.lesson.index',['cate'=>$cate]);
    }
    public function getAdd()
    {
    	return view('cate.add');
    }
    public function postAdd(Request $request)
    {
    	$this->validate($request,
    		[
    			
    			'name' =>'required|unique:categories,name|min:3|max:100'
    		],
    		[
    			'name.required'=>' ban chua nhap ten category',
    			'name.unique'=>'tên đã tồn tại',
    			'name.min'=>'ten category it nhat 3 ki tu',
    			'name.max'=>'ten category nhieu nhat 100 ki tu'
    		]);
    	$cate = new Category;
    	$cate->name = $request->name;

    	$cate->save();
    	
    	return redirect('/cate/list')->with('thongbao', 'Thêm thành công');
    }

    public function getEdit($id)
    {
    	$cate = Category::find($id);

    	return view('cate.edit', ['cate'=>$cate]);
    }
    public function postEdit(Request $request, $id)
    {
    	$cate = Category::find($id);
    	$this->validate($request,
    		[
    			
    			'name' =>'required|unique:Categories,name|min:3|max:100'
    		],
    		[
    			'name.required'=>' ban chua nhap ten category',
    			'name.unique'=>'tên đã tồn tại',
    			'name.min'=>'ten category it nhat 3 ki tu',
    			'name.max'=>'ten category nhieu nhat 100 ki tu'
    		]);
    	$cate->name = $request->name;
    	$cate->save();
    	return redirect('/cate/list')->with('thongbao', 'sửa thành công');

    }
    public function getDelete($id)
    {
    	$cate = Category::find($id);
    	$cate->delete();

    	return redirect('/cate/list')->with('thongbao', 'xóa thành công');

    }
   
   
}
