@extends('layouts.app')
@section('menu')        
<div class="col-md-3" style="float: left;">       
<ul class="list-group" id="menu">
                    <li href="#" class="list-group-item menu1 active" align="center">
                        Setup
                    </li>

                    <li href="" class="list-group-item menu1">
                         <a href="/profile/edit/{{$user->id}}" >Information </a>
                    </li>
                     <li href="" class="list-group-item menu1">
                        <a href="/profile/edit/password/{{$user->id}}" >Password </a>
                    </li>
                    
                    
                </ul>
             </div>     
@endsection
@section('content')

 <div class="col-md-9" style="float: right;"> 
@if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>@endif
<img src="/uploads/avatars/{{$user->avatar}}" style="width:300px; height: 300px; float: left; border-radius: 50%; margin-right: 50px; margin-left: 100px">

<h3 style="margin-left: 30px">{{ Auth::user()->name}}'s Profile</h3>
<pre>
UserName : {{ Auth::user()->name }}
Email : {{ Auth::user()->email }}
                </pre>
<form enctype="multipart/form-data" action="/profile" method="POST" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <table >
            <tr>
                <td >
                    <label style="margin-top:30px;">Update Avatar</label>
                </td>
            </tr>
            <tr> 
                <td>
                    <input type="file" name="avatar" style="margin-top:30px">
                </td>
            </tr>
                    
            <tr>
                <td> 
                    <input type="submit" class=" btn-sm btn-primary" value="submit" style="margin-top:30px; margin-left: 100px">
                </td>
            </tr>
        </table>
</form>
</div>
@endsection
