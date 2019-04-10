@extends('users.nav')
@section('content')
    <div class="container">

        {{--@foreach($classes as $class)--}}
            {{--{{$class->id}}--}}
        {{--@endforeach--}}
            @foreach($every as $assignment)
            <div class="row ml-2">
                <div class="bg-success rounded-top rounded-bottom">
                    <div class="text-center">
                        <h5 class="text-danger">
                            {{$assignment->file_path}}
                        </h5>
                    <span class="text-center ">
                        {{$assignment->created_at->diffForHumans()}}
                    </span>
                        <a target="_blank" href="{{route('download' , $assignment->id)}}">
                            <button class="btn btn-danger col-12">Download Doc</button>
                        </a>

                    </div>
                </div>
                <br><br>
            @endforeach

        </div>
    </div>
@stop