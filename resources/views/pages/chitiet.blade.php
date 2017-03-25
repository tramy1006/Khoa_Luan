@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <!-- Blog Post Content Column -->
        <div class="col-lg-9">

            <!-- Blog Post -->

            <!-- Title -->
            <h1 align="center">{{$less->title}}</h1>

            <!-- Author -->
            <p class="lead">
                by <a href="#">admin</a>
            </p>

            <!-- Preview Image -->
            <p>
            <video width="800px" height="300px" controls>
					<source style="width: 800px; height: 300px" src="/uploads/lesson/video/{{$less->media}}" class="img-responsive" type="video/mp4">
			</video></p>
            <!-- Date/Time -->
            <p><span class="glyphicon glyphicon-time"></span> Posted on : {{$less->created_at}}</p>
            <hr>

            <!-- Post Content -->
            <p class="lead">{!! $less->noidung !!}</p>

            <hr>

            <!-- Blog Comments -->

            <!-- Comments Form -->
            
            <div class="well">
                <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                <form role="form" action="/comment/{{$less->id}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token() }}"/>
                    <div class="form-group">
                        <textarea class="form-control" name="noidung" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Gửi</button>
                </form>
            </div>

            <hr>
            

            <!-- Posted Comments -->

            <!-- Comment -->
            @foreach($less->comments as $cmt)
            <div class="media">
                <a class="pull-left" href="#">
                    <img style="width: 30px; height: 30px" class="media-object" src="{{asset('/uploads/avatars/'. $cmt->users->avatar ) }}" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">{{$cmt->users->name}}
                        <small>{{$cmt->created_at}}</small>
                    </h4>
                    {{$cmt->noidung}}
                </div>
            </div>
            @endforeach

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-3">

            <div class="panel panel-default">
                <div class="panel-heading" align="center"><b>Liên Quan</b></div>
                <div class="panel-body">
                @foreach($lesslienquan as $lq)
                    <!-- item -->
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <a href="/cate/lesson/{{$lq->id}}">
                                <img class="img-responsive" style="width: 80px; height: 80px" src="{{asset('/uploads/lesson/images/' . $lq->hinh)}}" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="/cate/lesson/{{$lq->id}}"><b>{{$lq->title}}</b></a>
                        </div>
                        <p style="padding-left: 5px">{{$lq->tomtat}}</p>
                        <div class="break"></div>
                    </div><hr>
                    <!-- end item -->
                @endforeach

                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading" align="center"><b>Nổi Bật</b></div>
                <div class="panel-body">
                @foreach($lessnoibat as $nb)
                    <!-- item -->
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <a href="/cate/lesson/{{$nb->id}}">

                                <img class="img-responsive" src="{{asset('/uploads/lesson/images/'. $nb->hinh)}}" alt="">
                           
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="/cate/lesson/{{$nb->id}}"><b>{{$nb->title}}</b></a>
                        </div>
                        <p style="padding-left: 5px">{{$nb->tomtat}}</p>
                        <div class="break"></div>
                    </div>
                    <hr>
                    <!-- end item -->
                @endforeach

                </div>
            </div>
            
        </div>

    </div>
    <!-- /.row -->
</div>
@endsection
