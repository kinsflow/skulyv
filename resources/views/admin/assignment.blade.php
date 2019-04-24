@extends('admin.adminNav')
@section('content')
<div class="container">
    <h1 class="ml-5">Welcome Admin</h1>
    <h3>this is {{ Auth::user()->profiles->classes->name }} class admin</h3>
</div>
@endsection
