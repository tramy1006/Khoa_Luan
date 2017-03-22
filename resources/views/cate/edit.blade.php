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

        <div class="col-md-9">
     		@if(count($errors) >0)
                     <div class="alert alert-danger">
                     	@foreach($errors->all() as $err)
                     		{{$err}} <br>
                     	@endforeach
                     </div>
                @endif 
             	<div class="panel panel-default">
             	
             		<div class="panel-heading" align="center" style="margin-bottom: 30px">
                		<h4>Edit Category <span style="color:#0000CC" >{{$cate->name}}</span></h4>

                	</div>

		            <div class="panel">
		                <form action="" method="post">
		                <input type="hidden" name="_token" value="{{csrf_token() }}"/> 
							<div class="form-group" style="margin-bottom: 30px; margin-left: 180px">

		                        <label>Category Name: </label>
		                        <input type="text" value="{{$cate->name}}" name="name" style="width: 250px"> 
		                    </div>

		                    <div class="button" align="center">

			                    <button type="submit" class="btn btn-primary" role="button" style="margin-right: 20px"><i class="fa fa-pencil"></i>Edit</button>
			                    <button type="reset" class="btn btn-primary" role="button"><i class="fa fa-refresh">Reset</i></button>
		                    </div>

		                </form>
		                       
		            </div>
		        </div>
           
      
@endsection
