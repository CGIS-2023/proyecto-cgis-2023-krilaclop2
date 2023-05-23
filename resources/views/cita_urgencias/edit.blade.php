<x-app-layout>
    <!DOCTYPE html>
<html>
<meta charset="utf-8">
        <title>Editar Paciente</title>
        <style>
            .box{
            width: 800px;
            height: 1200px;
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

            .button-opt {
                width: 80%;
                background-color: #009879;
                border: none;
                color: white;
                padding: 5px 10px;
                text-decoration: none;
                margin: 13px 12px 12px 10px;
                cursor: pointer;
                border-radius: 5px;
            }

            .nuevoPaciente {
                height:40px;
                width: 80px;
                background-color: #009879;
                border: none;
                color: white;
                padding: 5px 10px;
                text-decoration: none;
                margin: 13px 12px 12px 10px;
                cursor: pointer;
                border-radius: 5px;
            }

            .container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100%;
            }

        </style>
    </head>
    <body>
    <br>
    <form action="{{route('cita_urgencias.update', $cita_urgencia->id)}}" method="POST" role="form" class="box">
        {{ csrf_field()}} 
        @method('put')
        <div class="">
            <label for="">Paciente</label>
            <input type="text" name="nombre" value="{{$cita_urgencia-> paciente_id}}">
        </div>
        <div class="">
            <label for="">Enfermero</label>
            <input type="text" name="apellidos" value="{{$cita_urgencia-> enfermero_id}}">
        </div>
        <div class="">
                <label for="">Médico</label>
                <input type="text" class="" id="" value="{{$cita_urgencia-> medico_id}}">
        </div>
            <div class="">
                <label for="">Fecha y Hora</label>
                <input type="datetime-local" class="form-date" id="" value="{{$cita_urgencia-> fecha_hora}}">
            </div>
            @if(in_array(Auth::user()->tipo_usuario_id, [2]))
            <x-button type="button" style="float: right;" class="bg-red-800 hover:bg-red-700">
                <a href="/informes/create"> Generar Informe </a>
            </x-button>
        
            <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="font-semibold text-lg px-6 py-4 bg-white border-b border-gray-200">
                    Añadir Tratamiento
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors->attach" />
                    <form method="POST" action="{{ route('cita_urgencias.attachTratamiento', [$cita_urgencia->id]) }}">
                        @csrf

                        <div class="mt-4">
                            <x-label for="tratamiento_id" :value="__('Tratamiento')" />


                            <x-select id="tratamiento_id" name="tratamiento_id" required>
                                <option value="">{{__('Elige un tratamiento')}}</option>
                                @foreach ($tratamientos as $tratamiento)
                                    <option value="{{$tratamiento->id}}" @if (old('tratamiento_id') == $tratamiento->id) selected @endif>{{$tratamiento->nombre}} {{$tratamiento->dosis}}</option>
                                @endforeach
                            </x-select>
                        </div>

                        <div class="mt-4">
                            <x-label for="inicio" :value="__('Inicio del tratamiento')" />

                            <x-input id="inicio" class="block mt-1 w-full"
                                     type="date"
                                     name="inicio"
                                     :value="old('inicio')"
                                     required />
                        </div>

                        <div class="mt-4">
                            <x-label for="fin" :value="__('Fin del tratamiento')" />

                            <x-input id="fin" class="block mt-1 w-full"
                                     type="date"
                                     name="fin"
                                     :value="old('fin')"
                                     required />
                        </div>

                        <div>
                            <x-label for="comentarios" :value="__('Comentarios')" />

                            <x-input id="comentarios" class="block mt-1 w-full" type="text" name="comentarios" :value="old('name')" />
                        </div>
                    @endif

            <div class="flex items-center justify-end mt-4">
                            <x-button type="button" class="bg-red-800 hover:bg-red-700">
                                <a href={{route('cita_urgencias.index')}}>
                                    {{ __('Cancelar') }}
                                </a>
                            </x-button>
                            <x-button class="ml-4">
                                {{ __('Guardar') }}
                            </x-button>
                        </div>
        </form>
    </body>
                </div>
            </div>
        </div>
    </div>

    </form>
    </body>
</html>
        </x-app-layout>
