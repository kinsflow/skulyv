@extends('admin.adminNav')
@section('content')
    <h1>Create Library</h1>
    <div class="container">
        <form method="POST" action="{{ route('library.store', $classes) }}" enctype="multipart/form-data">
            @csrf
                <div class="col-11">
                        <div class="form-group">
                            <label for="title">Document Title</label>
                            <input class="form-control" type="file" name="file" id="file">
                            <input type="submit" class="text-light bg-primary form-control" value="Update Library">
                        </div>
                    </div>
        </form>

    </div>
@stop
