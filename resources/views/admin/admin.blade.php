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
                            <a href="/cate/add">Add</a>
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
                </div>

                  
@endsection
@section('content')
<div class="col-md-9" style="float: right">
<div class="panel panel-default">
    <div class="panel-heading" style="background-color:#337AB7; color:white;" >
        <h2 style="margin-top:0px; margin-bottom:0px;" align="center">Welcome to Admin</h2>
    </div>

        <div class="panel-body">      
                
            <span><img src="http://2.bp.blogspot.com/--4gNx8gPH_c/U4Lz7rlNlTI/AAAAAAAAHmA/iavZFgJ4GOI/s1600/Welcome.jpg" width="800px" /></span>
               
       </div>
</div>
</div>
@endsection
