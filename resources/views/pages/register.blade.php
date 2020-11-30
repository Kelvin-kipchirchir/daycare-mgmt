<html>
<form method="post" action="/register">
@csrf
<label>Username:</label>
<input type="text" name="username">
<label>Email:</label>
<input type="email" name="email">
<label>password:</label>
<input type="password" name="password">
<button type="submit">Login</button>


</form>
</html>