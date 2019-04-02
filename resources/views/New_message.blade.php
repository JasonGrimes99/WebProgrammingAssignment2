
@extends('layouts.app')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap/theme.css">
    <title>Main Page</title>
</head>
<body>

    <div class="body-container">
        @include ('nav')
        <table>
            <tr>
                <th>Sender ID </th>
                <th>Select Reciptient</th>
                <th>Message Content</th>
            </tr>
            <tr>
                <td><?php echo($ID)?> </td>
                <td>

                    <select name="id" class="body-container">
                        @foreach($Users as $User)
                        <option value="{{$User->id}}"> {{$User->email}}>  </option> //this should display users by email while saving their value as their ID
                            @endforeach

                    </select>

                </td>
                <td>????</td>
            </tr>

        </table>

    </div>

</body>