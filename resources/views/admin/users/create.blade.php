@extends('admin.layouts.master')
@section('content')
    <div>
        <div class="container">
            <section class="content">
                <div class="row">
                    <div>
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3>Register</h3>
                            </div>
                            <form class="register-form" action="{{route('users.store')}}" method="POST">
                                {{ csrf_field() }}
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input autocomplete="new-password" type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input autocomplete="new-password" type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <div>
                                            <input type="radio" name="gender" id="male" value={{\App\User::_MALE}}>Male
                                            <input type="radio" name="gender" id="female" value={{\App\User::_FEMALE}}>Female
                                            <input type="radio" name="gender" id="orther" value={{\App\User::_ORTHER}}>Other
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="birthday">Birthday</label>
                                        <input type="date" class="form-control" id="birthday" name="birthday" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <input type="submit" class=" btn btn-primary" value="Sign up">
                                </div>

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
