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
                  
@endsection
@section('content')

        <div class="col-md-9" style="float: right">

               
                <div class="panel panel-default">
                
                 @if(count($errors) >0)
                     <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}} <br>
                        @endforeach
                     </div>
                @endif 
                    <div class="panel-heading" align="center" style="margin-bottom: 30px">
                        <h4>Add Category</h4>

                    </div>                   
                    <div class="panel">
                               
                        <form method="post" action="add" >
                            <input type="hidden" name="_token" value="{{csrf_token() }}"/>
                            <div class="form-group" style="margin-bottom: 30px; margin-left: 170px">
                                <label>Category Name:</label>
                                <input type="text" style='width:300px; height: 30px; margin-top: 20px' name="name"  placeholder="Please enter Category Name" >
             
                                </div>
                                <div class="button" align="center">
                                <button type="submit" class="btn btn-primary" role="button" style="margin-right: 20px"><i class="fa fa-plus-circle"></i>Add Category</button>
                                <button type="reset" class="btn btn-primary"><i class="fa fa-refresh"></i>Reset</button> 
                                </div>
                        </form>
                               
                    </div>
                </div>
       
    
</div>
@endsection
