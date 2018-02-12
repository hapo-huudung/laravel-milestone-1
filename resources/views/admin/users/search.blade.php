@extends('admin.layouts.master')
@section('content')
    <div>
        <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{session()->get('success')}}
                            </div>
                        @endif
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
                <?php
                 function changeColor($str,$key)
                {
                   return str_replace($key,"<span style='color:red;'>$key</span>",$str);
                }
                ?>
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
                            <td>{!! changeColor($user->name,$key) !!}</td>
                            <td>
                                @if($user->gender==\App\User::_MALE) {{"Male"}}
                                @elseif($user->gender==\App\User::_FEMALE){{"Female"}}
                                @else {{"Other"}}
                                @endif
                            </td>
                            <td>{!! changeColor($user->email,$key) !!}</td>
                            <td>{{(new \Carbon\Carbon($user->birthday))->format('d/m/Y')}}</td>
                            <td>{!! changeColor($user->address,$key) !!}</td>
                            <td>
                                <a href="{{route('users.show',['id'=>$user->id]) }}" class="btn btn-primary">Info</a>
                                <a href="{{route('users.edit',['id'=>$user->id]) }}" class="btn btn-success">Edit</a>
                                <form action="{{route('users.destroy',['id'=>$user->id])}}" method="post"
                                      class="form inline">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger " type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="col-lg-3 col-lg-offset-9">
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection

