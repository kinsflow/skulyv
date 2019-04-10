<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Skulyv</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
    <h1>Edit Profile</h1>
    <hr>
    <div class="row">
        <!-- left column -->
        <div class="col-md-3">
            <div class="text-center">
                <img height="150" src="/images/{{Auth::user()->profiles->photos ? Auth::user()->profiles->photos->file_path : 'no photo'}}" class="avatar img-circle" alt="avatar">
                <h6>Upload a different photo...</h6>
                <form method="post" action="{{route('profile.picture', $profile->id)}}" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="photo_id" class="form-control">
                    <input type="submit" value="submit" class="form-control">
                </form>

            </div>
        </div>

        <!-- edit form column -->
        <div class="col-md-9 personal-info">
            <div class="alert alert-info alert-dismissable">
                <a class="panel-close close" data-dismiss="alert">×</a>
                <i class="fa fa-coffee"></i>
                This is an <strong>.alert</strong>. Use this to show important messages to the user.
            </div>
            <h3>Personal info</h3>

            <form method="post" action="{{route('profile.update', $profile->id)}}" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label class="col-lg-3 control-label">Department:</label>
                    <div class="col-lg-8">
                        <input name="department" class="form-control" type="text" value="{{Auth::user()->profiles->department}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Date Of Birth:</label>
                    <div class="col-lg-8">
                        <input name="D_O_B" class="form-control" type="date" value="{{Auth::user()->profiles->D_O_B}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Faculty:</label>
                    <div class="col-lg-8">
                        <input name="faculty" class="form-control" type="text" value="{{Auth::user()->profiles->faculty}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Status:</label>
                    <div class="col-lg-8">
                        <input name="status" class="form-control" type="text" value="{{Auth::user()->profiles->status}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Current Level:</label>
                    <div class="col-lg-8">
                        <div class="ui-select">
                            <select name="current_level" id="user_time_zone" class="form-control">
                                <option value="100">year 1</option>
                                <option value="200">year 2</option>
                            </select>
                        </div>
                    </div>
                </div>
                {{--<div class="form-group">--}}
                    {{--<label class="col-lg-3 control-label">Time Zone:</label>--}}
                    {{--<div class="col-lg-8">--}}
                        {{--<div class="ui-select">--}}
                            {{--<select name="time_zone" id="user_time_zone" class="form-control">--}}
                                {{--<option value="Hawaii">(GMT-10:00) Hawaii</option>--}}
                                {{--<option value="Alaska">(GMT-09:00) Alaska</option>--}}
                                {{--<option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>--}}
                                {{--<option value="Arizona">(GMT-07:00) Arizona</option>--}}
                                {{--<option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>--}}
                                {{--<option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>--}}
                                {{--<option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>--}}
                                {{--<option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="form-group">
                    <label class="col-md-3 control-label">Phone Number:</label>
                    <div class="col-md-8">
                        <input name="phone_number" class="form-control" type="number" value="{{Auth::user()->profiles->phone_number}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Class Name:</label>
                    <div class="col-lg-8">
                        <div class="ui-select">
                            <select name="class_name" id="user_time_zone" class="form-control">
                                <option value="1">Comp. Sc</option>
                                <option value="2">MCB</option>
                            </select>
                        </div>
                    </div>
                </div>
                {{--<div class="form-group">--}}
                    {{--<label class="col-md-3 control-label">Password:</label>--}}
                    {{--<div class="col-md-8">--}}
                        {{--<input name="password" class="form-control" type="password" value="11111122333">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label class="col-md-3 control-label">Confirm password:</label>--}}
                    {{--<div class="col-md-8">--}}
                        {{--<input name="confirmation" class="form-control" type="password" value="11111122333">--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                        <input type="submit" class="btn btn-primary" value="Save Changes">
                        <span></span>
                        <input type="reset" class="btn btn-default" value="Cancel">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<hr>
</body>
</html>