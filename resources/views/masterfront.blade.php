<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/custom.css') }}" />
</head>
<body>

<header>
<div class="container">
<div class="row">
<div class="col-md-6">
<h2><a href="/">Laravel Questionnaire Project</a></h2>
</div>
<div class="col-md-6">
</div>
</div>
</div>
</header>

@yield('content')


<footer>
<div class="container">
<div class="row"><div class="col-md-12">Developed by JSDdesign 2019</div></div>
</div>
</footer>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{ url('/js/custom.js') }}" crossorigin="anonymous"></script>
@yield('quizscripts')
</body>
</html>