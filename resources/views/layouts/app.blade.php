<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-page')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
</head>
<body>
<div class="container">
    
    @yield('header')
    @yield('Registrare')
    @yield('LogIn')
    @yield('navbar')
    @yield('after-navbar')
    @yield('admin-add-User')
    @yield('add-a-product')
    @yield('show-tel')

    @yield('erorrs')


</div>
</body>
</html>