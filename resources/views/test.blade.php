<!DOCTPE html>
<html>
<head>
    <title>test</title>
</head>
<body>

<form method="POST" action="{{URL::to('/test')}}">
    {{ csrf_field() }}
    <input type="text" name="input_username">
    <button type="submit" name="submit">submit</button>
</form>



</body>
</html>