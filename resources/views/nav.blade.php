<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
<nav id="side-navbar">

    <div class="side-navbar-header">
        <a href="main"><img src="media/shout_logo.png" width="200px" height="80px"></a>
    </div>

    <ul class="list-unstyled components">
        <li>
            <a href="main">Home</a>
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
                        <!-- // previous logout button //   <a class="nav-link" href="">Logout</a> -->
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</body>
</html>
