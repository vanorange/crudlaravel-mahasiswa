<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD LARAVEL</title>

</head>
<body>
    
    <div class="container-fluid">
        <div class="row">
            @stack('before-style')
            @include('includes.style')
            @stack('after-style')

            @stack('before-content')
            @yield('content')
            @stack('afer-content')


            @stack('before-script')
            @include('includes.script')
            @stack('after-script')
        </div>
    </div>

</body>
</html>