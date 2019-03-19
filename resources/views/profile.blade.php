<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/theme.css">
    

    <title>Main Page</title>
</head>
<body>

    <div class="body-container">
        <nav id="side-navbar">
            <div class="side-navbar-header">
                <h1>Shout</h1>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Profile</a>
                </li>
                <li>
                    <a href="messages.html">Messages</a>
                </li>
                <li>
                    <a href="meetings.html">Meetings</a>
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
            <div class="container-fluid" id="about-user">
                <div class="row">
                    <div class="col-sm-3">
                        <h1>Profile Picture goes here</h1>
                    </div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col">
                                <p>Name</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Date of Birth</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Role</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h1>User Summary</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2>How Many Meetings:</h2>
                    </div>
                    <div class="col">
                        <h2>2</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2>How Many Messages:</h2>
                    </div>
                    <div class="col">
                        <h2>2</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="#" class="btn btn-primary btn-sm" onclick="TogglePreferences('prefs');return false;">User Settings</a>
                    </div>
                </div>
                <div class="row" id="prefs" style="display:none">
                    <div class="col">
                        <div class="form-group">
                            <input type="radio" id="private" name="visibility" value="private" checked>
                            <label for="private">Private</label>

                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <input type="radio" id="public" name="visibility" value="public">
                            <label for="public">Public</label>

                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <input type="radio" id="shared" name="visibility" value="shared">
                            <label for="shared">Shared</label>

                        </div>
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
    <script type="text/javascript">
    function TogglePreferences(id) {
        if (document.getElementById(id).style.display == 'flex') {
            document.getElementById(id).style.display = 'none';
        } else {
            document.getElementById(id).style.display = 'flex';
        }
};
    </script>
</body>
</html>