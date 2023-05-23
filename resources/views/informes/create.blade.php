<x-app-layout>
    <x-slot name="header">
        <nav class="font-semibold text-xl text-gray-800 leading-tight" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
              {{-- <li class="flex items-center">
                <a href="#">Home</a>
                <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
              </li> --}}
              <li class="flex items-center">
                <a href="{{ route('informes.index') }}">Informes</a>
                <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
              </li>
            </ol>
          </nav>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="font-semibold text-lg px-6 py-4 bg-white border-b border-gray-200">
                    Nuevo Informe
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                <style>

            .box{
            width: 800px;
            height: 900px;
            background-color: #f1f1f1;
            border-radius: 10px;
            margin: auto;
            padding: 20px;
            }

            textarea{
                width: 100%;
                height: 150px;
                padding: 12px 20px;
                margin: 20px 0;
                box-sizing: border-box;
            }

            body {
                margin: auto;
                padding: 50px;
            }

            input[type=select], input[type=textarea] {
                width: 100%;
                padding: 12px 20px;
                margin: 20px 0;
                box-sizing: border-box;
                background-color: white;
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
            <form action="/informes" method="POST" role="form" class="box">
            {{ csrf_field() }}
            <div class="mt-4">
                <x-label for="riesgo" :value="__('Riesgo')" />
                        <x-select id="riesgo" name="riesgo" required>
                            <option value="">{{__('Nivel de Riesgo')}}</option>
                            <option value="">{{__('Nivel I')}}</option>
                            <option value="">{{__('Nivel II')}}</option>
                            <option value="">{{__('Nivel III')}}</option>
                            <option value="">{{__('Nivel IV')}}</option>
                            <option value="">{{__('Nivel V')}}</option>
                        </x-select>
            </div>

            <div class="mt-4">
                <x-label for="comentarios" :value="__('Observaciones')" />
                <textarea name="comentarios" rows="10" cols="40">...</textarea>
            </div> 

            <div class="mt-4">
                <x-label for="diagnostico" :value="__('Diagnóstico')" />
                <textarea name="comentarios" rows="10" cols="40">...</textarea>
            </div>  
            
            @isset($paciente)
                                <x-input id="paciente_id" class="block mt-1 w-full"
                                         type="hidden"
                                         name="paciente_id"
                                         :value="$paciente->id"
                                         required />
                                <x-input class="block mt-1 w-full"
                                         type="text"
                                         disabled
                                         value="{{$paciente->user->name}} ({{$paciente->nuhsa}})"
                                          />
                            @else
                            <x-select id="paciente_id" name="paciente_id" required>
                                <option value="">{{__('Elige un paciente')}}</option>
                                @foreach ($pacientes as $paciente)
                                    <option value="{{$paciente->id}}" @if (old('paciente_id') == $paciente->id) selected @endif>{{$paciente->user->name}} ({{$paciente->nuhsa}})</option>
                                @endforeach
                            </x-select>
                            @endisset
                        </div>

                        <div class="mt-4">
                            <x-label for="medico_id" :value="__('Médico')" />
                            @isset($medico)
                                <x-input id="medico_id" class="block mt-1 w-full"
                                         type="hidden"
                                         name="medico_id"
                                         :value="$medico->id"
                                         required />
                                <x-input class="block mt-1 w-full"
                                         type="text"
                                         disabled
                                         value="{{$medico->user->name}} ({{$medico->especialidad->nombre}})"
                                          />
                            @else
                                <x-select id="medico_id" name="medico_id" required>
                                    <option value="">{{__('Elige un médico')}}</option>
                                    @foreach ($medicos as $medico)
                                        <option value="{{$medico->id}}" @if (old('medico_id') == $medico->id) selected @endif>{{$medico->user->name}} ({{$medico->especialidad->nombre}})</option>
                                    @endforeach
                                </x-select>
                            @endisset
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
</x-app-layout>