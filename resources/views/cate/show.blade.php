@extends('layouts.ad')
@section('content')
			 <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Category Name</th>
								<th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($cate as $theloai)
                            <tr class="odd gradeX" align="center">
                            <td>{{ $theloai->id}}</td>
                            <td>
                                <a href="">{{$theloai->name}}</a>
                            </td>
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
                <!-- /.row -->
            </div>
@endsection
