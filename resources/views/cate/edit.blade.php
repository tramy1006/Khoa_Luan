@extends('layouts.ad')

@section('content')

        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><span style="color:#0000CC" >{{$cate->name}}</span>
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
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
                        </div>
                    @endif
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
                <!-- /.row -->
            </div>
      
@endsection
