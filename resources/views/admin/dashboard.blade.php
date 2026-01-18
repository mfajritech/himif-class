@extends('admin.template')

@section('content')

<h1>admin dashboard</h1>
<a href="{{ route('get-logout') }}">LOGOUT</a>
<a href="{{ route('get-admin-manage-course') }}">manage courses</a>
<a href="{{ route('get-admin-manage-coach') }}">manage coaches</a>
<a href="{{ route('get-admin-manage-student') }}">manage students</a>

@endsection
