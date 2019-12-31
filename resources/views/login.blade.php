<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
        <div class="container">
            <form action="/loginme" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                Username<input type="text" name="username"><br/>
                Password<input type="text" name="password"><br/>
                <input type="submit" name="login" value="login">
            </form>

            <br/>
            <br/>

            <a href="/register" name="register">Register</a>
        </div>
    </body>
</html>
