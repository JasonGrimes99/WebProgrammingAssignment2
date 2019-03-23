<?php
if(empty(session('user'))){
    return redirect('');

$numOfMeetings = 2;

$students = array();
$counter = 0;

function meetingBuilder($name, $date, $content){

    echo "
<div class='row'>

    <div class='col'>
        <a href='#'>$name</a>
    </div>

    <div class='col'>
        <p>$content</p>
    </div>

    <div class='col'>
        <p>$date</p>
    </div>

</div>
";
}
?>
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

    @include('nav')



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
        <div>
            @foreach($studentName as $student)
                <?php $students[$counter] = $student->First_Name; $counter++  ?>
            <!--    <p>{{$student->First_Name}}</p> -->
            @endforeach
        <?php
        for($i=0; $i <= $numOfMeetings; $i++){

            meetingBuilder($students[$i], "27/10/2016 15:00:00", "Meeting at $i:00, See STUDENT_PROFILE");}
        ?>
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
