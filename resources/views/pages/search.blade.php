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
                        <h4 align="center"><b >Tìm Kiếm : {{$tukhoa}}</b></h4>
                    </div>
                    
                    
                    <!-- /.row -->

                </div>
            </div> 
@endsection
