
@extends('layouts.app') 
@section('content')  
        <div class="col-md-12">
                
                  	@if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                    	<div class="left" style="float: right">
                    	<a class="btn btn-primary" href="add" role="button"><i class="fa fa-plus-circle"></i> Add Lesson</a>
                    	</div>
                        <div class="right" style="float: left">
                        <a class="btn btn-primary" href="{{ url('/admin') }}" role="button"><i class="fa fa-btn fa-sign-out"></i> Back Admin </a>
                        </div>
                    	<div class="right" align="center">    
                    	<h2>Lesson List                     
                        </h2>
                        </div>
                    

                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr  style="background: #C1CDCD;" align="center">
                            	<th>ID</th>
                                <th style="width:150px" align="center" >Tiêu Đề</th>
								<th style="width:300px;">Tóm Tắt</th>
								<th>Category</th>
								<th style="width: 200px">Video</th>
								<th style="width: 80px">Xem</th>
                                <th style="width: 80px">Nổi Bật</th>
								<th style="width: 80px">Delete</th>
								<th style="width: 80px">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($less as $lesson)
							<tr align="center">
								<td>{{$lesson->id}}</td>
								<td>
									<p>{{$lesson->title}}</p>
									
                                    <img width="150px" height="100px" src="{{ asset('/uploads/lesson/images/'. $lesson->hinh )}}">
									
								</td>
								<td>{{$lesson->tomtat}}</td>
								<td>{{$lesson->categories->name}}</td>
								<td>
									<video width="200" height="150px" controls>
									 	<source src="/uploads/lesson/video/{{$lesson->media}}" type="video/mp4">
									</video>
								</td>
								<td>
									{{$lesson->luotxem}}
								</td>
								<td>
                                @if($lesson->noibat == 0)
                                    {{'không'}}
                                @else
                                    {{'có'}}
                                @endif
                                </td>				
								<td class="center">
									<i class="fa fa-trash-o fa-fw"></i><a href="delete/{{$lesson->id}}">Delete</a>

								</td>
								<td class="center">
									<i class="fa fa-pencil fa-fw"></i><a href="edit/{{$lesson->id}}">Edit</a>
								</td>

							</tr>
						@endforeach
                        </tbody>
                    </table>
                
         </div>

@endsection
