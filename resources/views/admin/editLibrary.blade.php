@extends('admin.adminNav')
@section('content')
    <h1>edit Library</h1>
    <div class="container ">
       <h3><i> modify docs</i></h3>
     
        <form method="post" action="{{ route('library.destroy', $assignments->id) }}" >
            @csrf
            <input class="text-light bg-danger form-control" type="submit" value="Delete">

        </form>
    </div>
@stop
