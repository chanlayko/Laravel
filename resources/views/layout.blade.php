<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="../css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- <link rel="stylesheet" href="../css/style.css"> -->
	<!-- <link rel="stylesheet" href="../css/all.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h2>Hello World</h2>
            <li><a href="/">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="contant">Contant</a></li>
            <br>
        @yield('contant')
    </div>

    <!-- <script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script> -->
</body>
</html>