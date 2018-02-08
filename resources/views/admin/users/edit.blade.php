@extends('admin.layouts.master')
@section('content')
    <div>
        <div class="container">
            <section class="content">
                <div class="row">
                    <div>
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3>Edit Infomation</h3>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                            <form class="register-form" action="{{route('users.update',['user'=>$user->id] )}}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="PUT">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input autocomplete="new-password" type="email" class="form-control" id="email" name="email" value="{{$user->email}}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input autocomplete="new-password" type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <div>
                                            <input type="radio" name="gender" id="male" value={{\App\User::_MALE}} @if($user->gender==\App\User::_MALE) checked @endif>Male
                                            <input type="radio" name="gender" id="female" value={{\App\User::_FEMALE}}@if($user->gender==\App\User::_FEMALE) checked @endif>Female
                                            <input type="radio" name="gender" id="orther" value={{\App\User::_ORTHER}}@if($user->gender==\App\User::_ORTHER) checked @endif>Other
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="birthday">Birthday</label>
                                        <input type="date" class="form-control" id="birthday" name="birthday" value="{{$user->birthday}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{$user->address}}">
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <input type="submit" class=" btn btn-primary" value="Update">
                                </div>

                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
