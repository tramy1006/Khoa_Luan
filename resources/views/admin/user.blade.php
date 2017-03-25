@extends('layouts.ad')

@section('content')
             <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</a></td>
                                <td>{{ $user->email }}</td>
                                 <td>
                                    @if(Auth::user()->role == 1 || $user->id == 1)
                                    <b>Disaled</b>
                                    @else
                                        <div class="form-group" style="margin-bottom:0px">
                                            <form method="post" action="/update-role/{{ $user->id }}">
                                            {{ csrf_field()}}
                                                <select class="form-control" name="role" onchange="this.form.submit();">
                                                    <option value="2" {{ (($user->role) == 2) ? 'selected': null }}>Admin</option>
                                                    <option value="1" {{ (($user->role) == 1) ? 'selected': null }}>Manager</option>
                                                    <option value="0" {{ (($user->role) == 0) ? 'selected': null }}>User</option>
                                                </select>
                                            </form>
                                            
                                        </div>
                                    @endif
                                    </td>
                                 
                                    <td>
                                    @if(Auth::user()->role == 1 || $user->id == 1)
                                    <b>Disaled</b>
                                    @else
                                    <i class="fa fa-trash-o fa-fw"></i><a href="user/delete/{{$user->id}}">Delete</a>
                                    @endif
                                    </td>
                                 
                                
                            </tr>
                           
                             @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
    
@endsection
