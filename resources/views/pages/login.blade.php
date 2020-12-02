@include('pages.index');
<h5>user login</h5>
<form method="post" action="/" class="col-sm-12 col-lg-12 col-md-12" >
@csrf
<label for="email" class="col-md-4 control-label">Email:</label><br>
<input type="email" id="email" class="form-control" name="email" require autofocus><br>
<label>password:</label><br>
<input type="password" name="password"><br><br>
<button type="submit" class="btn btn-primary">Login</button>
<p>eithout an account???</p><a href="no_account">sigh up</a>
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
