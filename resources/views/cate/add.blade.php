@extends('layouts.ad')

@section('content')

       <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>Add</small>
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
                        <div class="panel">
                               
                        <form method="post" action="add" >
                            <input type="hidden" name="_token" value="{{csrf_token() }}"/>
                            <div class="form-group" style="margin-bottom: 30px; ">
                                <label>Category Name:</label>
                                <input type="text" style='width:300px; height: 30px; margin-top: 20px' name="name"  placeholder="Please enter Category Name" >
             
                                </div>
                                <div class="button" align="center">
                                <button type="submit" class="btn btn-primary" role="button" "><i class="fa fa-plus-circle"></i>Add Category</button>
                                <button type="reset" class="btn btn-primary"><i class="fa fa-refresh"></i>Reset</button> 
                                </div>
                        </form>
                               
                    </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
@endsection
