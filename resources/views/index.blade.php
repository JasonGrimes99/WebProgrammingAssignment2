<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap/theme.css">

    <title>Login Screen</title>
</head>
<body>

<?php
    use \App\Http\Controllers\Controller_login;
?>


<div class="container-fluid h-100">
    <div class="row justify-content-center align-items-center">
        <a href="/shout"><img src="media/shout_logo.png" width="200px" height="80px"></a>
    </div>
    <div class="row justify-content-center align-items-center">
        <h1>Please Login</h1>
    </div>
    <div class="row justify-content-center align-items-center h-100">
        <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
            <form action="{{URL::to('index')}}" method="POST"> <!-- log in php script in action-->
                {{ csrf_field() }}
                <div class="form-group">
                    <p>Email:</p>
                    <input type="email" class="form-control" name="input_email"/>
                </div>
                <div class="form-group">
                    <p>Password:</p>
                    <input type="password" class="form-control" name="input_password" />
                </div>
                <div class="form-group">
                    <div class="container">
                        <div class="row">
                            <div class="col"><button type="reset" class="col-6 btn btn-secondary btn-sm float-left">Reset</button></div>
                            <div class="col"><button class="col-6 btn btn-primary btn-sm float-right" type="submit">Submit</button></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <!-- <div class="col"><button class="btn btn-primary" href="../register" >Register</button></div> -->
                    <div class="col"><a class="btn btn-primary" href="register">Register</a></div>
                </div>

            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>