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
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
    <aside class="profile-card">
        <header>
            <!-- here’s the avatar -->
            <a href="{{route('profile.edit',$profile)}}">
                <img src="/images/{{Auth::user()->profiles->photos ? Auth::user()->profiles->photos->file_path : 'no photo'}}">
            </a>

            <!-- the username -->
            <h1>
                {{Auth::user()->last_name." ". Auth::user()->first_name}}
            </h1>

            <!-- department -->
            <h2>
                {{Auth::user()->profiles->department}}
            </h2>

        </header>

        <!-- bit of a bio; who are you? -->
        <div class="profile-bio">

            <p>
                {{Auth::user()->profiles->status}}
            </p>

        </div>

        <!-- some social links to show off -->
        <ul class="profile-social-links">
            <li>
                <a target="_blank" href="https://www.facebook.com/creativedonut">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li>
                <a target="_blank" href="https://twitter.com/dropyourbass">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li>
                <a target="_blank" href="https://github.com/vipulsaxena">
                    <i class="fa fa-github"></i>
                </a>
            </li>
            <li>
                <a target="_blank" href="https://www.behance.net/vipulsaxena">

                    <i class="fa fa-behance"></i>
                </a>
            </li>
        </ul>
    </aside>
</div>
</body>
</html>