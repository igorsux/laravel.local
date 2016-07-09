<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="utf-8">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

    <h1 class="text-center">{{$pagetitle}}</h1><hr/>

    <div class="container">
        @yield('content')
    </div>



    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" > </script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" > </script>
</body>
</html>