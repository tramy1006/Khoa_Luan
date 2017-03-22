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
			<div class="col-md-9" style="float: right;">
				
					
					<div class="panel panel-default">
						@if(session('thongbao'))
						<div class="alert alert-success">
							{{session('thongbao')}}
						</div>@endif
						<div class="panel-heading" align="center">
							<h3>List Category</h3>
						</div>
						<div class="panel-body">
							<div class="bs-example" data-example-id="paned-without-body-with-table">
								<div class="panel panel-default">
									
								 	 
									<table class="table">
										<thead>
											<tr>
												<th>ID</th>
												<th>Category Name</th>
												<th>Lesson</th>
												<th>Delete</th>
												<th>Edit</th>
											</tr>
										</thead>
										<tbody>
										@foreach($cate as $theloai)
											<tr>
												<td>{{ $theloai->id}}</td>
												<td>
													<a href="">{{$theloai->name}}</a>
												</td>
												<td>///</td>
												<td class="center">
													<i class="fa fa-trash-o fa-fw"></i><a href="delete/{{$theloai->id}}">Delete</a>
												</td>
												<td class="center">
													<i class="fa fa-pencil fa-fw"></i><a href="edit/{{$theloai->id}}">Edit</a>
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
