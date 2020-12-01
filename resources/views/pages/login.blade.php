@include('pages.index');
<h3>user login</h3>
<form method="post" action="/" class="col-sm-12 col-lg-12 col-md-12" >
@csrf
<label>Email:</label><br>
<input type="email" name="email"><br>
<label>password:</label>
<input type="password" name="password"><br>
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
