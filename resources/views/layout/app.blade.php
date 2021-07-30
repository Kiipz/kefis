<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>Kefis</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
    @include('inc.navbar')
    @if ($message = Session::get('success'))
        <div class="myalert-success">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <strong>{{ $message }}</strong>
        </div>
        <script>
            setTimeout(function(){
                $('.myalert-success').fadeOut(1000);
            }, 4000);
        </script>
    @endif
    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>