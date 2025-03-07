<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
   
    <div>
        <a href="/">Home</a>
        <a href="/contact">Contact</a>
        <a href="/info">Info Page</a>
    </div>
    <h1>Welcome</h1>
    <div>
        @yield('content')
    </div>
</body>
</html>