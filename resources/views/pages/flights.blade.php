@extends('main')

@section('content')

    <h1 class="center-align">{{ $from }} hasta {{ $to }}</h1>
    @foreach($flights as $flight)
    <div class="row">
        <div class="col s12">
            <div class="card teal lighten-2">
                <div class="card-content black-text">
                    <div class="row">
                        <div class="col s6">
                            <h3> {{ $flight->departure_date }}</h3>
                        </div>

                        <div class="col s3">
                            <span>Clase Economica</span>
                            <h4> {{ $flight->second_class }}</h4>
                        </div>
                        <div class="col s3">
                            <span>Primera Clase</span>
                            <h4>{{ $flight->first_class }}</h4>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="card-action">
                    <a href=" {{ action('PagesController@registerPassengers', ['pass_amt' => $pass_amt]) }}">Seleccionar</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach

@stop