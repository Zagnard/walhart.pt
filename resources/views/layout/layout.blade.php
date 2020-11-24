<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="device-width, initial-scale=1.0">
    <title>
        @yield("title")
    </title>
    <link href="libraries/Bootstrap CSS/bootstrap.css" rel="stylesheet">
</head>

<body>
    @include("layout.partials.header")
    <div class="container">
        @yield("content")
    </div>

        <script src="libraries/jquery_library_3.4.1.js">
        </script>
        <script src="libraries/Bootstrap JS/bootstrap.min.js">
        </script>

</body>

</html>