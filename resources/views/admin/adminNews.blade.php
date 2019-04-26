@extends('admin.adminNav')
@section('content')
    <h1>create Post/News</h1>
    <div class="container">
        <div class="col-8 ml-4 text-dark">
            <form method="POST" action="{{ route('store.news') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title"><b>Title</b></label>
                        <input type="text" class="form-control" name="title" id="">
                    </div>
                    <div class="form-group">
                        <label for="body"><b>Body</b></label>
                        <textarea class="form-control" name="body" id="" cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="photo">Got A Pictorial Attachment</label>
                        <input type="file" class="form-control" name="photo" id="">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn-success form-control" value="Submit">
                    </div>
                </form>
        </div>

    </div>
@endsection
