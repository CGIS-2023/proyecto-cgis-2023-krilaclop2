<x-app-layout>
    <x-slot name="header">
        <nav class="font-semibold text-xl text-gray-800 leading-tight" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
              {{-- <li class="flex items-center">
                <a href="#">Home</a>
                <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
              </li> --}}
              <li class="flex items-center">
                <a href="{{ route('cita_urgencias.index') }}">Citas</a>
                <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
              </li>
            </ol>
          </nav>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="font-semibold text-lg px-6 py-4 bg-white border-b border-gray-200">
                    Nueva Cita
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
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

            input[type=select], input[type=datetime-local] {
                width: 100%;
                padding: 12px 20px;
                margin: 20px 0;
                box-sizing: border-box;
            }

            input[type=select]:focus {
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

            legend {
                font-size: 25px;
                align-items: center;
                display: flex;
                justify-content: center;
            }
            
        </style>
    </head>
    <body>
            <form action="cita_urgencias.update" method="POST" role="form" class="box">
            {{ csrf_field() }}
            <div class="mt-4">
                <x-label for="paciente_id" :value="__('Paciente')" />
                        <x-select id="paciente_id" name="paciente_id" required>
                            <option value="">{{__('Elige un paciente')}}</option>
                                @foreach ($pacientes as $paciente)
                                    <option value="{{$paciente->id}}" @if (old('paciente_id') == $paciente->id) selected @endif> [{{$paciente->id}}] {{$paciente->nombre}} {{$paciente->apellidos}} </option>
                                @endforeach
                        </x-select>
            </div>
            <div class="mt-4">
                <x-label for="enfermero_id" :value="__('Enfermero')" />
                        <x-select id="enfermero_id" name="enfermero_id" required>
                            <option value="">{{__('Elige un enfermero')}}</option>
                                @foreach ($enfermeros as $enfermero)
                                    <option value="{{$enfermero->id}}" @if (old('enfermero_id') == $enfermero->id) selected @endif> [{{$enfermero->id}}] {{$enfermero->nombre}} {{$enfermero->apellidos}} </option>
                                @endforeach
                        </x-select>
            </div>
            <div class="mt-4">
                <x-label for="medico_id" :value="__('Médico')" />
                        <x-select id="medico_id" name="medico_id" required>
                            <option value="">{{__('Elige un medico')}}</option>
                                @foreach ($medicos as $medico)
                                    <option value="{{$medico->id}}" @if (old('medico_id') == $medico->id) selected @endif> [{{$medico->id}}] {{$medico->nombre}} {{$medico->apellidos}} </option>
                                @endforeach
                        </x-select>
            </div>
            <div class="">
                <x-label for="">Fecha y Hora</x-label>
                <input type="datetime-local" id="fecha_hora" name = "fecha_hora" class="">
            </div>

            <x-button type="button" class="bg-red-800 hover:bg-red-700">
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
                                    <option value="{{$tratamiento->id}}" @if (old('tratamiento_id') == $tratamiento->id) selected @endif>{{$tratamiento->nombre}}</option>
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
</x-app-layout>