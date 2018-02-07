@extends('admin.layouts.master')
@section('content')
    <div>
        <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2>Manage Employee</h2>
                        </div>
                        <div class="col-lg-6">

                        </div>
                    </div>
                </div>
                @php
                    $count=1
                @endphp
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Birthday</th>
                        <th>Address</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                        <td>{{$count++}}</td>
                        <td>{{$user->name}}</td>
                            <td>
                                @if($user->gender==\App\User::_MALE) {{"Male"}}
                                    @elseif($user->gender==\App\User::_FEMALE){{"Female"}}
                                    @else {{"Orther"}}
                                    @endif
                            </td>
                            <td>{{$user->email}}</td>
                        <td>{{(new \Carbon\Carbon($user->birthday))->format('d/m/Y')}}</td>
                        <td>{{$user->address}}</td>
                        <td>
                            <a href="{{route('users.show',['id'=>$user->id]) }}" class="btn btn-primary">Info</a>
                            <a href="{{route('users.edit',['id'=>$user->id]) }}" class="btn btn-success">Edit</a>
                            <form action="{{route('users.destroy',['id'=>$user->id])}}" method="post" class="form inline">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE" >
                                <button class="btn btn-danger " type="submit" >Delete</button>
                            </form>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

