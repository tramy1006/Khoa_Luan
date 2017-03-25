@extends('layouts.app')
@section('menu')
<div class="col-md-3" style="float: left;">
    @include('pages.menu')
</div>
@endsection
@section('content')
<div class="col-md-9 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#337AB7; color:white;">
                        <h4 align="center"><b >{{$catt->name}}</b></h4>
                    </div>
                    @foreach($less as $lesson)
                    <div class="row-item row">
                       
                        <div class="col-md-3" >

                            
                                <br>
                                <video width="200px" height="200px" class="img-responsive" controls>
                                        <source  src="{{asset('/uploads/lesson/video/'. $lesson->media )}}" type="video/mp4" >
                                </video>
                            
                        </div>

                        <div class="col-md-9" >
                            <h3>{{$lesson->title}}</h3>
                            <p>{{$lesson->tomtat}}</p>
                            <a class="btn btn-primary" href="/cate/lesson/{{$lesson->id}}">Chi tiết <span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>

                        
                        <div class="break"></div>
                    </div> 
                    @endforeach
                             
                    <!-- Pagination -->
                    <div class="link" align="center" style="margin-top: 30px"> 
                   {{$less->links()}}
                   </div>
                    <!-- /.row -->

                </div>
            </div> 
@endsection
