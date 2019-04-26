<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Skulyv</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/welcome.css')}}">

    </head>
    <body>

                <div id="container">
                    <div id="topbar">
                        <ul>
                            <li>
                                <a href="#">
                                    <!--border-radius: 100% transforms borders into circles-->
                                    <img src="https://res.cloudinary.com/wilfredxd/image/upload/v1471790653/blueperson_i3ahzk.png" style="border-radius: 100%" />
                                </a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/u/0/notifications/all?hl=en">
                                    <img src="https://res.cloudinary.com/wilfredxd/image/upload/v1471790653/notification_ucwhun.png" />
                                </a>
                            </li>
                            <li>
                                <a href="https://www.google.com/intl/en/aboout/products/">
                                    <img src="https://res.cloudinary.com/wilfredxd/image/upload/v1471790653/apps_jbdno1.png" />
                                </a>
                            </li>

                            {{--@if (Route::has('login'))--}}

                                    {{--@auth--}}
                                        {{--<li><a href="{{ url('/home') }}">Home</a></li>--}}
                                    {{--@else--}}
                                        {{--<li><a href="{{ route('login') }}">Login</a></li>--}}

                                        {{--@if (Route::has('register'))--}}
                                            {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                                        {{--@endif--}}
                                    {{--@endauth--}}
                                {{--</div>--}}
                            {{--@endif--}}
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('signup') }}">Register</a></li>
                        </ul>
                    </div>
                    <img style="" id="logo" alt="google" src="https://res.cloudinary.com/wilfredxd/image/upload/v1471790654/google-logo_paxdp8.png" />
                    <div id="searchbar">
                        <form action="#" method="get">
                            <input placeholder="Search Google or type URL" name="search" type="search"></input>
                        </form>
                    </div>
                    <div id="search-options">
                        <div class="button"><a href="{{ route('login') }}">Login</a></div>
                        <div class="button"><a href="{{ route('signup') }}">Register</a></div>
                    </div>
                    <!-- This tanslates the homepage to different languages -->
                    <div id="languages">
                        <p>Google.com.sg offered in:
                            <span lang="zh-Hans"><a href="https://www.google.com.sg/setprefs?sig=0_MVvFF6P7hiq2LcdXE6wYb8hdQR8%3D&hl=zh-CN&source=homepage"> 中文(简体)</a></span>
                            <span lang="ms"><a href="https://www.google.com.sg/setprefs?sig=0_MVvFF6P7hiq2LcdXE6wYb8hdQR8%3D&hl=ms&source=homepage"> Bahasa Melayu</a></span>
                            <span lang="ta"><a href="https://www.google.com.sg/setprefs?sig=0_MVvFF6P7hiq2LcdXE6wYb8hdQR8%3D&hl=ta&source=homepage"> தமிழ்</a></span>
                        </p>
                    </div>
                    <div id="bottombar">
                        <ul id="bottomright">
                            <li><a href="https://www.google.com/preferences">Settings</a></li>
                            <li>
                                <a href="https://www.google.com.sg/intl/en/policies/terms/regional.html">
                                    Terms
                                </a>
                            </li>
                            <li><a href="https://www.google.com/intl/en/policies/">Privacy</a></li>
                        </ul>
                        <ul id="bottomleft">
                            <li><a href="https://www.google.com/intl/en/about/">About</a></li>
                            <li><a href="https://www.google.com/services/">Business</a></li>
                            <li><a href="https://www.google.com/intl/en/ads/">Advertising</a></li>
                        </ul>
                    </div>
                </div>
                </body>
    </body>
</html>
