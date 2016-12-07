<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Online store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" type="text/css" href="/css/styles.css">
        <script src="/js/libs.js"></script>
        <script>window.jQuery || document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"><\/script>')</script>
        <!--[if lt IE 9]>
        <script src="js/html5shiv-printshiv.js"></script>
        <script src="js/selectivizr-min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
        
        <script src="/js/scripts.js"></script>




        <div class="contaier">
            <div class="content">

                <div class="row">
                    <div class="time-range">

                        <div class="from">
                            <div class="hour" id="from-hour">
                                <span class="increase">
                                    +
                                </span>
                                <input name="start-hour" type="text" class="time-input">
                                <span class="decrease">
                                    -
                                </span>
                            </div>

                            <div class="minute" id="from-minute">
                                <span class="increase">
                                    +
                                </span>
                                <input name="start-minute" type="text" class="time-input">
                                <span class="decrease">
                                    -
                                </span>
                            </div>
                        </div>

                        <div class="to">
                            <div class="hour" id="to-hour">
                                <span class="increase">
                                    +
                                </span>
                                <input name="stop-hour" type="text" class="time-input">
                                <span class="decrease">
                                    -
                                </span>
                            </div>

                            <div class="minute" id="to-minute">
                                <span class="increase">
                                    +
                                </span>
                                <input name="stop-minute" type="text" class="time-input" value="00">
                                <span class="decrease">
                                    -
                                </span>
                            </div>
                            
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="tasks-range">
                        <ul class="hours-range">
                            <li class="hour">
                                <select name="select1" class="tasks-select">
                                    <option value="task 1">Task 1</option>
                                    <option value="task 2">Task 2</option>
                                    <option value="task 3">Task 3</option>
                                    <option value="task 4">Task 4</option>
                                    <option value="task 5">Task 5</option>
                                </select>
                            </li>

                            <li class="hour">
                                <select name="select2" class="tasks-select">
                                    <option value="task 1">Task 1</option>
                                    <option value="task 2">Task 2</option>
                                    <option value="task 3">Task 3</option>
                                    <option value="task 4">Task 4</option>
                                    <option value="task 5">Task 5</option>
                                </select>
                            </li>

                            <li class="hour">
                                <select name="select3" class="tasks-select">
                                    <option value="task 1">Task 1</option>
                                    <option value="task 2">Task 2</option>
                                    <option value="task 3">Task 3</option>
                                    <option value="task 4">Task 4</option>
                                    <option value="task 5">Task 5</option>
                                </select>
                            </li>

                            <li class="hour">
                                <select name="select4" class="tasks-select">
                                    <option value="task 1">Task 1</option>
                                    <option value="task 2">Task 2</option>
                                    <option value="task 3">Task 3</option>
                                    <option value="task 4">Task 4</option>
                                    <option value="task 5">Task 5</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </body>
</html>
