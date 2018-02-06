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
                            <a href="#" class="btn btn-success">New</a>
                        </div>
                    </div>
                </div>
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Birthday</th>
                        <th>Address</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>{{"dung"}}</td>
                        <td>{{"dun@gmail.com"}}</td>
                        <td>{{"24-11-1997"}}</td>
                        <td>{{"Ha Noi"}}</td>
                        <td>
                            <a href="#" class="btn btn-primary">Info</a>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection

