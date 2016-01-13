@extends('main')

@section('content')

    <h1 class="center-align">CSS hasta NYC</h1>
    @for ($i = 1; $i < 11; $i++)
    <div class="row">
        <div class="col s12">
            <div class="card teal lighten-2">
                <div class="card-content black-text">
                    <div class="row">
                        <div class="col s6">
                            <h3>6:00am a 10:00am</h3>
                        </div>

                        <div class="col s3">
                            <span>Clase Economica</span>
                            <h4>560 $</h4>
                        </div>
                        <div class="col s3">
                            <span>Primera Clase</span>
                            <h4>1300 $</h4>
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
    @endfor

@stop