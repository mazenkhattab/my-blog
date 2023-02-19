<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <h1>Login</h1>
    <form method="post" action="/login">
      @csrf
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" value="{{ old('email') }}"><br>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password"><br>
      <input type="submit" value="Login">
    </form>
  </body>
</html>