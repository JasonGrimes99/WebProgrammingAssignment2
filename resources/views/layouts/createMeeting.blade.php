<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap/theme.css">
</head>
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