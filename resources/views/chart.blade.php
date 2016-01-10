<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Starter Template - Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link href="css/app.css" type="text/css" rel="stylesheet" media="screen,projection"/> -->
    <link rel="stylesheet" type="text/css" href="css/jquery.seat-charts.css">
    <link rel="stylesheet" type="text/css" href="css/chart-style.css">

</head>
<body>

<nav class="transparent" id="mainnav">
    <div class="nav-wrapper">
        <a href="#" class="brand-logo black-text">Express Flights</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#" class="black-text"><i class="material-icons left">search</i>Buscar Vuelos</a></li>
            <li><a href="#" class="black-text"><i class="material-icons right">view_module</i>Iniciar Sesion</a></li>
        </ul>
    </div>


</nav>

<div class="wrapper">
    <div class="container">
        <div id="seat-map">
            <div class="front-indicator">Front</div>

        </div>
        <div class="booking-details">
            <h2>Booking Details</h2>

            <h3> Selected Seats (<span id="counter">0</span>):</h3>
            <ul id="selected-seats"></ul>

            Total: <b>$<span id="total">0</span></b>

            <button class="checkout-button">Checkout &raquo;</button>

            <div id="legend"></div>
        </div>
    </div>
</div>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/jquery.seat-charts.min.js"></script>
<script src="js/chart-b.js"></script>
<script src="js/chart.js"></script>


</body>
</html>