<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UpdateUserRequest;
use Auth;
use DB;
use App\User;
use Image;
class UserController extends Controller
{
    public function getAdmin()
    {
        return view('layouts.ad');
    }
    public function profile()
    {
        return view('admin.profile', array('user'=>Auth::user()));
    }
    public function update_profile(Request $request)
    {
       
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ));
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
            
        
        return view('admin.profile', array('user'=>Auth::user()));
    }
    public function getEdit( $id)
    {
        $user = User::find($id);
        return view('admin.information', ['user'=>$user]);
    }
    public function postEdit(Request $request,$id)
    {
        $user = User::find($id);
        $this->validate($request, 
            [
                'name' =>'required|unique:users,name|min:3|max:100',
                'email' => 'required|unique:users,email'
            ], 
            [
                'name.required'=>' Bạn chưa nhập tên',
                'name.unique'=>'Tên đã tồn tại',
                'name.min'=>'Tên ít nhất 3 kí tự',
                'name.max'=>'Tên nhiều nhất 100 kí tự',
                'email.required'=>'Bạn chưa nhập tên',
                'email.unique'=>'Email đã tồn tại'
            ]
        );
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect('/profile')->with('thongbao', 'Sửa thành công');

    }
    public function getEditPass( $id)
    {
        $user = User::find($id);
        return view('admin.password', ['user'=>$user]);
    }
    public function postEditPass(Request $request, $id)
    {
        $user = User::find($id);
        $this->validate($request, 
            [
                'password'=>'required|min:6|max:20',

            ], 
            [
                'password.required'=>'Bạn chưa nhập password',
                'password.min'=>'Password ít nhất 6 ký tự',
                'password.max'=>'Password nhiều nhất 20 ký tự'
            ]
            );
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('/profile')->with('thongbao', 'Update thành công');
    }
    public function users()
    {
        if(Auth::user()->role == 0)
        {
            return redirect('/');
        }
        $users = DB::table('users')->get();
        return view('admin.user', compact('users'));
    }
    public function updateRole( Request $request, User $user)
    {
        $user->update($request->all());
        return redirect('/users');
    }
    public function getDelete($id)
    {
        $user = User::find($id);

        $user->delete();
        return redirect('/users');
    }
    
 }
