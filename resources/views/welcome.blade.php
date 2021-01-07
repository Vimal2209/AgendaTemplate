<!DOCTYPE html>
<html>
    <head>
        <title> Template </title>
        <link rel ="stylesheet" href="{{asset('css/app.css')}}" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class = "container">
            <form method="post" action="CreateDocument" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="date"> Date </label>
                    <input type="date" class = "form-control form-control-sm" name="date" />
                </div>
                <div class="form-group">
                    <label for="time"> Time </label>
                    <input type="time" class = "form-control form-control-sm" name="time" />
                </div>
                <div class="form-group">
                    <label for="venue"> Venue </label>
                    <input type="text" class = "form-control form-control-sm" name="venue" />
                </div>
                <div class="form-group">
                    <label for="title"> Meeting Title </label>
                    <input type="text" class = "form-control form-control-sm" name="title" />
                </div>   
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="a1"> Minutes of Last Meeting </label>
                            <input type="text" class = "form-control form-control-sm" name="a1" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="image"> Add File </label>
                            <input type="file" class = "form-control form-control-sm" name="attach" />
                        </div> 
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="image"> URL Link </label>
                            <input type="text" class = "form-control form-control-sm" name="link" />
                        </div> 
                    </div>
                </div>         
                <div class="form-group">
                    <label for="image"> Choose Image to replace</label>
                    <input type="file" class = "form-control form-control-sm" name="image" />
                </div>        
                <div class="form-group">
                    <label for="templates"> Select Template </label>
                        {{@csrf_field()}}
                        <select class="form-control form-control-sm" name="template">    
                            <option value="T1">T1</option>
                            <option value="T2">T2</option>
                            <option value="T3">T3</option>
                            <option value="T4">T4</option>
                        </select>
                </div>
                <div class="form-group"> 
                    <input type="submit" name="generate" class="btn btn-info" value="Submit" />  
                </div>            
            </form>
        </div> 
        
        
        
    </body>
</html>









<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title> -->

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

        <!-- Styles -->
        <!-- <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> -->
