<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap/theme.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Main Page</title>
</head>
<body>
<div class="body-container">

    @include('nav')

    <div class="container-fluid" id="meetings">
        <div class="row">
            <div class="col">
                <!-- modal for creation of new meetings -->
                <div class="w3-container">
                    <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary">New meeting</button>
                    <div id="id01" class="w3-modal">
                        <div class="w3-modal-content">
                            <div class="w3-container">
                                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                                <form name="meet_form" method="post" action="{{action('Controller_createMeeting@create')}}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>Who would you like to have a meeting with?</label>
                                        <input type="text" class="form-control" name="meet_to">
                                    </div>

                                    <div class="form-group">
                                        <label>Location:</label>
                                        <input type="text" class="form-control" name="meet_location">
                                    </div>

                                    <div class="form-group">
                                        <label>Meeting time:</label>
                                        <input type="time" class="form-control" name="meet_time">
                                    </div>

                                    <div class="form-group">
                                        <label>Meeting date:</label>
                                        <input type="date" class="form-control" name="meet_date">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- -->
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2>Meeting with:</h2>
            </div>
            <div class="col">
                <h2>Meeting location:</h2>
            </div>
            <div class="col">
                <h2>Date and time</h2>
            </div>
        </div>
        <div>
            <!-- -->
        @foreach($meetingResults as $result)
                <div class='row'>

                    <div class='col'>
                        <a href='#'>{{ $result->name }}</a>
                    </div>

                    <div class='col'>
                        <p>{{ $result->meet_location }}</p>
                    </div>

                    <div class='col'>
                        <p>{{$result->meet_time}} {{$result->meet_date}}</p>
                    </div>

                </div>
        @endforeach
        <!-- -->
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
    });
</script>
</body>
</html>