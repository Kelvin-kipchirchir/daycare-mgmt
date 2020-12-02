<!DOCTYPE html>
<html>
<head>
	<title>daycare dashboard</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
</head>
<header>activities platform <a href='logout' style="float:right"; class="btn btn-primary";>sighout</a></header>
<body>
@section('sidebar')
<a href="all_users">records</a>
@show
<div class="container" style="background-color='red'";>
@yield('content')
</div>
</body>
</html