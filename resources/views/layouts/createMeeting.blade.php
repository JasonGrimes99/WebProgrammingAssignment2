<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap/theme.css">
</head>
<div class="w3-container">
    <button onclick="document.getElementById('id01').style.display='block'">New meeting</button>
    <div id="id01" class="w3-modal">
        <div class="w3-modal-content">
            <div class="w3-container">
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                <form name="meet_form" method="post" action="{{action('Controller_createMeeting@create')}}">
                    {{ csrf_field() }}

                    <input  type="text">


                    <label>Location:</label>
                    <input name="meet_location" type="text">


                    <label>Meeting time:</label>
                    <input name="meet_time" type="time">

                    <label>Meeting date:</label>
                    <input name="meet_date" type="date">


                    <button name="meet_submit" type="submit">Submit</button>
                </form>

                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Who would you like to have a meeting with?</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="meet_to">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>