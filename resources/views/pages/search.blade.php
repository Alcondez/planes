@extends('main')

@section('content')

    <div class="row">
        <form method="post" action="/search" class="col s12">

            <div class="row">
                <div class="input-field col s6">
                    {{ Form::text('departure', '', array('id' => 'departure', 'class' => 'validate', 'data-role' => 'materialtags'))}}
                   <label for="departure">Desde</label>
                </div>

                <div class="input-field col s6">
                    {{ Form::text('arrival', '', array('id' => 'arrival', 'class' => 'validate', 'data-role' => 'materialtags'))}}
                    <label for="arrival">Hasta</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input id="date_from" type="date" class="datepicker" name="date_from">
                    <label for="date_from"> Desde</label>
                </div>

                <div class="input-field col s6">
                    <input type="date" class="datepicker" id="date_to" name="date_to">
                    <label for="date_to">Hasta</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s4">
                    <select name="pass_amt" id="pass_amt">
                        <option value="" disable selected>Numero de Pasajeros</option>
                        @for ($i = 1; $i < 11; $i++)
                            <option value="{{$i}}">{{$i}}</option>
                        @endfor
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col s1">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Buscar Vuelos
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>

        </form>

    </div>

@stop