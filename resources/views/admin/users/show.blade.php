@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="text-center">
            <div class="panel-group panel-danger">
                <div class="panel-heading">Name: {{$user->name}}</div>
                    <div class="panel-body">Email: {{$user->email}}</div>
                    <div class="panel-body">Gender: {{$user->gender}}</div>
                    <div class="panel-body">Birthday: {{(new \Carbon\Carbon($user->birthday))->format('d/m/Y') }}</div>
                    <div class="panel-body">Address: {{$user->address}}</div>
            </div>
        </div>
    </div>
    @endsection