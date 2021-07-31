<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>Kefis | offsite warehouse</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
    @include('warehouse.navbar')
    @if ($errors->any())
        <div class="myalert-success" style="background-color: red;">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($message = Session::get('success'))
        <div class="myalert-success">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <script>
        setTimeout(function(){
            $('.myalert-success').fadeOut(1000);
        }, 4000);
    </script>
    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>