<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap/theme.css">
    <title>Main Page</title>
</head>
<body>

<div class="body-container">
    <nav id="side-navbar">
        <div class="side-navbar-header">
            <a href="/shout"><img src="media/shout_logo.png" width="200px" height="80px"></a>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="/shout">Home</a>
            </li>
            <li>
                <a href="profile">Profile</a>
            </li>
            <li>
                <a href="messages">Messages</a>
            </li>
            <li>
                <a href="meetings">Meetings</a>
            </li>
        </ul>
    </nav>


    <div id="main-items">


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="side-navbar-collapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Toggle Sidebar</span>
                </button>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <form class="form-inline">
                            <input class="form-control mr-4" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logout</a>
                        </li>
                    </ul>
                </div>


            </div>
        </nav>
        <div class="container-fluid" id="meetings">
            <div class="row">
                <div class="col">
                    <h1>Meetings</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h2>Meeting Name</h2>
                </div>
                <div class="col">
                    <h2>Date and Time</h2>
                </div>
                <div class="col">
                    <h2>Who With</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="#">First Meeting</a>
                </div>
                <div class="col">
                    <p>Date and Time</p>
                </div>
                <div class="col">
                    <p>Who With</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="#">Second Meeting</a>
                </div>
                <div class="col">
                    <p>Date and Time</p>
                </div>
                <div class="col">
                    <p>Who With</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="#">Third Meeting</a>
                </div>
                <div class="col">
                    <p>Date and Time</p>
                </div>
                <div class="col">
                    <p>Who With</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">$(document).ready(function () {

        $('#side-navbar-collapse').on('click', function () {
            $('#side-navbar').toggleClass('active');
        });

    });</script>
</body>
</html>