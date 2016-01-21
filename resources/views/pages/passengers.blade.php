@extends('main')

@section('content')

    <h1 class="center-align">Informacion de los pasajeros</h1>
    @for($i = 0; $i < $pass_amt; $i++)
        <div class="row">
            <h3>Pasajero {{$i+1}}</h3>
            <hr>
            <form action=" " method="post" class="col s12">
            <div class="row">
                <div class="input-field col s3">
                    <select name="prefix" id="prefix">
                        <option value="" disabled selected>Prefijo</option>
                        <option value="Sr.">Sr.</option>
                        <option value="Sra.">Sra.</option>
                        <option value="Srta.">Srta.</option>
                    </select>
                </div>
                <div class="input-field col s3">
                    <input type="text" id="firstname" name="firstname" class="validate">
                    <label for="firstname">Primer Nombre</label>

                </div>
                <div class="input-field col s3">
                    <input type="text" id="secondname" name="secondname" class="validate">
                    <label for="secondname">Segundo Nombre</label>
                </div>
                <div class="input-field col s3">
                    <input type="text" id="lastname" name="lastname" class="validate">
                    <label for="lastname">Apellido</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s3">
                    <input type="text" class="validate" id="documentno" name="documentno">
                    <label for="documentno">Documento de Identidad</label>
                </div>
            </div>

        </form>
        </div>
    @endfor

@stop