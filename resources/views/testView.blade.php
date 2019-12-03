<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <!-- Styles -->

    </head>
    <body>
        <div class="container">

            <form method="get" action="http://local.codal.com/insert">
                <div class="form-group">
                    <input type="name" name="aname" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="name" name="user" class="form-control" placeholder="User Name">
                </div>
                <div class="form-group">
                    <input type="name" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="name" name="age" class="form-control" placeholder="Age">
                </div>
                <div class="form-group">
                    <input type="name" name="gender" class="form-control" placeholder="Gender">
                </div>
                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
            </form>


        </div>

    </body>
</html>
