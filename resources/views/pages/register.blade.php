<html>
<h5>user sign</h5>
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<form method="post" action="/register" class="col-sm-12 col-lg-12 col-md-12" >
@csrf
<label>Username:</label><br>
<input type="text" name="username"><br>
<label>Email:</label><br>
<input type="email" name="email"><br>
<label>password:</label><br>
<input type="password" name="password"><br>
<label> confirm password:</label><br>
<input type="password" name="cpass"><br><br>
<button type="submit" class="btn btn-primary">Register</button>
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</html>