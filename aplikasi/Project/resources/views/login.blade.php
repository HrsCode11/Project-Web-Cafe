
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<form action="{{route('actionlogin')}}" method="post">
  @csrf
<div class="div">
    <div class="div-2">Login</div>
    <input class="div-3" name="email" type="email" placeholder="Email">
    <input class="div-4" name="password" type="password" placeholder="Password">
    <input class="div-5" type="submit" value="Login">
    <div class="div-6">
      <div class="div-7"></div>
      <div class="div-8">
        Don't have an account?
        <span style="font-weight: 700; color: rgba(51, 49, 49, 1)">
          <a href="register">Register now</a>
        </span>
      </div>
      <div class="div-9"></div>
    </div>
    <div class="div-10"></div>
</div>
</form>
</body>
</html>