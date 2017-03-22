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
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                    
                <div class="panel-heading" align="center" style="margin-bottom: 10px">
                    <h3 >Edit Lesson</h3>
                    <h4 style="color: #092"> {{$less->title}}</h4>

                </div>                   
                <div class="panel">
                               
                    <form  action="" method="POST" enctype="multipart/form-data" >
                        <input type="hidden" name="_token" value="{{csrf_token() }}"/>
                        <div class="form-group" >
                            <label>Category Parent</label>
                            <select class="form-control" name="category">
                            @foreach($cate as $tl)
                                <option 
                                    @if($less->categories->id == $tl->id)
                                        {{"selected"}}
                                    @endif
                                    value="{{$tl->id}}"> {{$tl->name}}
                                </option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input class="form-control" name="tieude" value="{{$less->title}}">
                        </div>
                        
                        <div class="form-group">
                            <label>Tóm tắt</label>
                            <input class="form-control" name="tomtat" value="{{$less->tomtat}}">
                        </div>
                        <div class="form-group">
                            <label>Nội Dung</label>
                            <textarea id="demo" name="noidung" class="form-control ckeditor" rows="5">{{$less->noidung}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Nổi Bật</label>
                            <label class="radio-inline">
                                <input name="noibat" value="0" 
                                @if($less->noibat == 0)
                                    {{"checked"}}
                                @endif
                                type="radio" /> Không
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="noibat" value="1"
                                @if($less->noibat == 1)
                                    {{"checked"}}
                                @endif
                                >Có
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <p><img width="150px" height="150px" src="/uploads/lesson/images/{{$less->hinh}}"></p>
                            <input type="file" name="hinh" class="form-control">
                        </div>
                         <div class="form-group">
                            <label>Video</label>
                            <p>
                                <video width="200" height="150px" controls>
                                    <source src="/uploads/lesson/video/{{$less->media}}" type="video/mp4">
                                </video>
                            </p>
                            <input type="file" name="media" class="form-control">
                        </div>
                        <div class="button" align="center">
                            <button type="submit" class="btn btn-primary" role="button" style="margin-right: 20px"> <i class="fa fa-pencil fa-fw"></i>Edit Lesson</button>
                            <button type="reset" class="btn btn-primary"><i class="fa fa-refresh"></i>Reset</button> 
                        </div>
                    </form>
                               
                </div>
            </div>
       
    </div>
    
    <div class="row">
    <div class="col-md-9 " style="float: right;">
        
            <div class="panel panel-default">
                <div class="panel-body">
                    <div align="center">    
                         <h2>Comment List</h2>
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>ID</th>  
                                    <th>Người dùng</th>
                                    <th>Nội Dung</th>
                                    <th>Ngày đăng</th>
                                    <th>Delete</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($less->comments as $cm)
                                <tr >
                                    <td>{{$cm->id}}</td>
                                    <td>{{$cm->users->name}}</td>
                                    <td>{{$cm->noidung}}</td>
                                    <td>{{$cm->created_at}}</td>
                                    <td class="center">
                                        <i class="fa fa-trash-o fa-fw"></i><a href="/comment/delete/{{$cm->id}}/{{$less->id}}">Delete</a>

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
