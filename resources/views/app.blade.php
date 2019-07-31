<!DOCTYPE html>
<html>
<head>
    {{--Import Google Icon Font--}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    {{--Import materialize.css--}}
    <link type="text/css" rel="stylesheet" href="css/app.css" media="screen,projection"/>

    {{--Let browser know website is optimized for mobile--}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

@yield('content')

@yield('font')

{{--JavaScript at end of body for optimized loading--}}
<script type="text/javascript">
    var laravelToken = '{{ csrf_token() }}';
</script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>
