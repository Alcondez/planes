<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Starter Template - Materialize</title>

    <!-- CSS  -->
    <link rel="stylesheet" href="{{ URL::asset('/css/typeahead-format.css')}}" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ URL::asset('/css/app.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="stylesheet" href="{{ URL::asset('/css/materialize-tags.css')}}" type="text/css">
    <!-- <link rel="stylesheet" href="{{ URL::asset('/css/jquery.seat-charts.css')}}" type="text/css"> -->
    <!-- <link rel="stylesheet" href="{{ URL::asset('/css/chart-style.css')}}" type="text/css"> -->



</head>
<body>

<nav>
    <div class="nav-wrapper teal">
        <a href="#" class="brand-logo black-text">Express Flights</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ url('/login') }}" class="black-text"><i class="material-icons right">person</i>Iniciar Sesion</a></li>
            <li><a href="{{ url('/register') }}" class="black-text"><i class="material-icons right">person</i>Registrarse</a></li>
        </ul>
    </div>


</nav>

<div class="container">

    @yield('content')

</div>




<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="http://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>
<script src="{{ URL::asset('js/materialize-tags.js')}}"></script>
<script src="{{ URL::asset('js/materialize.min.js')}}"></script>
<script src="{{ URL::asset('js/initializations.js')}}"></script>
<script src="{{ URL::asset('js/jquery.seat-charts.min.js')}}"></script>
<script src="{{ URL::asset('js/chart-b.js')}}"></script>
<script src="{{ URL::asset('js/chart.js')}}"></script>
<script type="text/javascript">
    var country_list = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('code'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        limit: 10,
        remote: {
            url: '/getdata/%QUERY',
            wildcard: '%QUERY',
            filter: function(list) {
                return $.map(list, function(airport) { return { code: airport }; });
            }
        }
    });
    country_list.initialize();

    $("#departure").materialtags({
        typeaheadjs: {
            name: 'country_list',
            displayKey: 'code',
            valueKey: 'code',
            source: country_list.ttAdapter()
        }
    });

    $("#arrival").materialtags({
        typeaheadjs: {
            name: 'country_list',
            displayKey: 'code',
            valueKey: 'code',
            source: country_list.ttAdapter()
        }
    });


</script>

</body>
</html>