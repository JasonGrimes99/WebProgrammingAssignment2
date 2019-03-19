<!DOCTPE html>
<html>
<head>
    <title>test</title>
</head>
<body>
<!-- <table border = "1">
    <tr>
        <td>Id</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>City Name</td>
        <td>Email</td>
    </tr>
     @foreach ($users as $user)
        <tr>
            <td>{{ $user->u_id }}</td>
            <td>{{ $user->u_username }}</td>
        </tr>
    @endforeach

</table> -->

    <p>{{ $user->u_name }}</p> <!-- double brackets, call $, and select column to print-->
    <p>{{ $user->u_id }}</p>

</body>
</html>