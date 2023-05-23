<!DOCTYPE html>
<html>
<meta charset="utf-8">
        <title>Editar Enfermero</title>
        <style>
            .box{
            width: 800px;
            height: 1000px;
            background-color: #f1f1f1;
            border-radius: 10px;
            margin: auto;
            padding: 20px;
            }

            body {
                margin: auto;
                padding: 50px;
            }

            input[type=text], input[type=date] {
                width: 100%;
                padding: 12px 20px;
                margin: 20px 0;
                box-sizing: border-box;
            }

            input[type=text]:focus {
                border: 3px solid #555;
            }

            select {
                width: 100%;
                padding: 16px 20px;
                margin: 20px 0;
                border-radius: 4px;
            }

            .form-date {
                padding: 16px;
                display: flex;
                flex-direction: row;
            }

            button {
                background-color: #009879;
                border: none;
                color: white;
                padding: 16px 165px;
                text-decoration: none;
                margin: 4px 10px;
                cursor: pointer;
                border-radius: 10px;
                align-items: center;
            }

            .buttonCancelar {
                display: block;
                width: 100px;
                margin-left: auto;
                margin-right: auto;
                background-color: #CD5C5C;
                border: none;
                color: white;
                padding: 16px 165px;
                text-decoration: none;
                margin: 4px 10px;
                cursor: pointer;
                border-radius: 10px;
                align-items: center;
            }

            legend {
                font-size: 25px;
                align-items: center;
                display: flex;
                justify-content: center;
            }

        </style>
    </head>
    <body>
    <legend>Información del Enfermero</legend>
    <br>
    <form action="{{route('enfermeros.update', $enfermero->id)}}" method="POST" role="form" class="box">
        {{ csrf_field()}} 
        @method('put')
        <br>
        <div class="py-12">
            <label for="">Nombre</label>
            <input type="text" name="nombre" value="{{$enfermero-> nombre}}">
        </div>
        <div class="py-12">
            <label for="">Apellidos</label>
            <input type="text" name="apellidos" value="{{$enfermero-> apellidos}}">
        </div>
        <div class="">
                <label for="">DNI</label>
                <input type="text" class="" id="" value="{{$enfermero-> dni}}">
        </div>
        <div class="">
            <label for="">Sexo</label>
            <select name="sexo" id="sexo">
                <option value="Femenino" {{($enfermero->sexo == 'Femenino')? 'selected': ''}}>Femenino</option>
                <option value="Masculino" {{($enfermero->sexo == 'Masculino')? 'selected': ''}}>Masculino</option>
                <option value="Otro" {{($enfermero->sexo == 'Otro')? 'selected': ''}}>Otro</option> 
            </select>
        </div>
            <div class="">
                <label for="">Fecha de Nacimiento</label>
                <input type="date" class="form-date" id="" value="{{$enfermero-> fecha_nacimiento}}">
            </div>
            <div class="">
                <label for="">Seguro</label>
                <select name="seguro">
                    <option value="Adeslas" {{($enfermero->seguro == 'Adeslas')? 'selected': ''}}>Adeslas</option>
                    <option value="Asisa" {{($enfermero->seguro == 'Asisa')? 'selected': ''}}>Asisa</option>
                    <option value="MAPFRE" {{($enfermero->seguro == 'MAPFRE')? 'selected': ''}}>MAPFRE</option>
                    <option value="Sanitas" {{($enfermero->seguro == 'Sanitas')? 'selected': ''}}>Sanitas</option>
                    <option value="None" {{($enfermero->seguro == 'None')? 'selected': ''}}>None</option>
                </select>
            </div>
            <div class="">
                <label for="">Correo</label>
                <input type="text" class="" id="" value="{{$enfermero-> correo}}">
            </div>
            
            <form method="POST" action="{{ route('enfermeros.attach_unidad', [$enfermero->id]) }}">
                        @csrf

                        <div class="mt-4">
                            <x-label for="unidad_id" :value="__('Unidad')" />

                            <x-select id="unidad_id" name="unidad_id" required>
                                <option value="">{{__('Elige una unidad')}}</option>
                                @foreach ($unidads as $unidad)
                                    <option value="{{$unidad->id}}" @if (old('unidad') == $unidad->id) selected @endif>{{$unidad->nombre}} </option>
                                @endforeach
                            </x-select>
                        </div>

                        <div class="mt-4">
                            <x-label for="inicio" :value="__('Inicio del turno')" />

                            <x-input id="inicio" class="block mt-1 w-full"
                                     type="datetime-local"
                                     name="inicio"
                                     :value="old('inicio')"
                                     required />
                        </div>

                        <div class="mt-4">
                            <x-label for="fin" :value="__('Fin del turno')" />

                            <x-input id="fin" class="block mt-1 w-full"
                                     type="datetime-local"
                                     name="fin"
                                     :value="old('fin')"
                                     required />
                        </div>

            <a href="/enfermeros" class="buttonCancelar">Cancelar</a>
            <button type="submit">Guardar Cambios</button>
            <br>
        </form>

    </form>
    </body>
</html>