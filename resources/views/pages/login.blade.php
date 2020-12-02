@include('pages.index');
<h5>user login</h5>
<form method="post" action="/" class="col-sm-12 col-lg-12 col-md-12" >
@csrf
<label>Email:</label><br>
<input type="email" name="email"><br>
<label>password:</label><br>
<input type="password" name="password"><br><br>
<button type="submit" class="btn btn-primary">Login</button>
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
