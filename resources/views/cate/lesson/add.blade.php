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

        <div class="col-md-9 " style="float: right;">
           <div class="panel panel-default">
                 @if(count($errors) >0)
                     <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}} <br>
                        @endforeach
                     </div>
                @endif 
                
                        @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>@endif
                <div class="panel-heading" align="center" style="margin-bottom: 10px">
                    <h4>Add Lesson</h4>

                </div>                   
                <div class="panel">
                               
                    <form  action="add" method="POST" enctype="multipart/form-data" >
                        <input type="hidden" name="_token" value="{{csrf_token() }}"/>
                        <div class="form-group" >
                            <label>Category Parent</label>
                            <select class="form-control" name="category">
                            @foreach($cate as $tl)
                                <option value="{{$tl->id}}">{{$tl->name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input class="form-control" name="tieude" placeholder="Nhập tiêu đề">
                        </div>
                        
                        <div class="form-group">
                            <label>Tóm tắt</label>
                            <input class="form-control" name="tomtat" placeholder="Nhập tóm tắt">
                        </div>
                        <div class="form-group">
                            <label>Nội Dung</label>
                            <textarea id="demo" name="noidung" class="form-control ckeditor" rows="5"></textarea>
                        </div>
                         <div class="form-group">
                            <label>Nổi Bật</label>
                            <label class="radio-inline">
                                <input name="noibat" value="0" checked="" type="radio"> Không
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="noibat" value="1">Có
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <input type="file" name="hinh" class="form-control">
                        </div>
                         <div class="form-group">
                            <label>Video</label>
                            <input type="file" name="media" class="form-control">
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
