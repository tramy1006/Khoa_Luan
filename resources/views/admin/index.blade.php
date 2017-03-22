@extends('layouts.app')
@section('menu')  
<div class="col-md-3" style="float: left;">            
<ul class="list-group" id="menu">
                    <li href="#" class="list-group-item menu1 active">
                        Management
                    </li>

                    <li href="#" class="list-group-item menu1">
                        User
                    </li>
                    <ul>
                        <li class="list-group-item">
                            <a href="/users">List</a>
                        </li>
                        
                    </ul>

                    <li href="#" class="list-group-item menu1">
                        Categories
                    </li>
                    <ul>
                        <li class="list-group-item">
                            <a href="/cate/list">List</a>
                        </li>
                        <li class="list-group-item">
                            <a href="cate/add">Add</a>
                        </li>
                        
                        
                    </ul>


                    <li href="#" class="list-group-item menu1">
                        Lesson
                    </li>

                    <ul>
                        <li class="list-group-item">
                            <a href="/lesson/list">List</a>
                        </li>
                        <li class="list-group-item">
                            <a href="/lesson/add">Add</a>
                        </li>
                                                
                    </ul>      
                </ul>
                  
@endsection
@section('content')
            <div class="col-md-9" style="float: right;">
            
                    <div class="panel panel-default">
                        @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>@endif
                        <div class="panel-heading" align="center"><h3>Management User</h3></div>
                        <div class="panel-body">
                  <div class="bs-example" data-example-id="paned-without-body-with-table">
                    <div class="panel panel-default">
                                    
                                     
                                    <table class="table">
                                       <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                                      <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td><a href="#">{{ $user->name }}</a></td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                    @if(Auth::user()->role == 1 || $user->id == 1)
                                    <b>Disaled</b>
                                    @else
                                        <div class="form-group" style="margin-bottom:0px">
                                            <form method="post" action="/update-role/{{ $user->id }}">
                                            {{ csrf_field()}}
                                                <select class="form-control" name="role" onchange="this.form.submit();">
                                                    <option value="2" {{ (($user->role) == 2) ? 'selected': null }}>Admin</option>
                                                    <option value="1" {{ (($user->role) == 1) ? 'selected': null }}>Manager</option>
                                                    <option value="0" {{ (($user->role) == 0) ? 'selected': null }}>User</option>
                                                </select>
                                            </form>
                                            
                                        </div>
                                    @endif
                                    </td>
                                 
                                    <td>
                                    @if(Auth::user()->role == 1 || $user->id == 1)
                                    <b>Disaled</b>
                                    @else
                                    <i class="fa fa-trash-o fa-fw"></i><a href="user/delete/{{$user->id}}">Delete</a>
                                    @endif
                                    </td>
                                 
                                   
                                </tr>
                                @endforeach
                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
@endsection
