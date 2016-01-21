@extends('main')

@section('content')
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

@stop


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/jquery.seat-charts.min.js"></script>
<script src="js/chart-b.js"></script>
<script src="js/chart.js"></script>


</body>
</html>