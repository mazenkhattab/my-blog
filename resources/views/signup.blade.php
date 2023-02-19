<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
  </head>
  <body>
    <h1>Sign Up</h1>
    <form method="post" action="/signup">
      @csrf
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" value="{{ old('name') }}"><br>
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" value="{{ old('email') }}"><br>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password"><br>
      <label for="password_confirmation">Confirm Password:</label>
      <input type="password" name="password_confirmation" id="password_confirmation"><br>
      <input type="submit" value="Sign Up">
    </form>
  </body>
</html>