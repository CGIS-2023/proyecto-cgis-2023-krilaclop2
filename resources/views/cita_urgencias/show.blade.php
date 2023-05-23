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
    <style>
            .box{
            width: 800px;
            height: 575px;
            background-color: #f1f1f1;
            border-radius: 10px;
            margin: auto;
            padding: 20px;
            }

            input[type=select], input[type=datetime-local] {
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
                background-color: #FFFFFF;
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
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="font-semibold text-lg px-6 py-4 bg-white border-b border-gray-200">
                    Información de la cita
                </div>

        @if(in_array(Auth::user()->tipo_usuario_id, [2]))
        <div class="p-6 bg-white border-b border-gray-200">
              <form action="{{route('cita_urgencias.update', $cita_urgencias->id)}}" method="POST" role="form" class="box">
                {{ csrf_field()}} 
                @method('put')
                <br>
                <div class="">
                    <label for="">Paciente</label>
                    <input readonly disabled type="select" name="nombre" value="{{$cita_urgencias-> paciente_id}}">
                </div>
                <div class="">
                    <label for="">Enfermero</label>
                    <input readonly disabled type="select" name="apellidos" value="{{$cita_urgencias-> enfermero_id}}">
                </div>
                <div class="">
                    <label for="">Médico</label>
                    <input readonly disabled type="select" class="" id="" value="{{$cita_urgencias-> medico_id}}">
                </div>
                <div class="">
                    <label for="">Fecha y hora</label>
                    <input readonly disabled type="datetime-local" id="" value="{{$cita_urgencias-> fecha_hora}}">
                </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-button type="button" class="bg-red-800 hover:bg-red-700">
                            <a href={{route('cita_urgencias.index')}}>
                                {{ __('Volver') }}
                            </a>
                        </x-button>             
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if(in_array(Auth::user()->tipo_usuario_id, [1,3,4]))
        <div class="p-6 bg-white border-b border-gray-200">
              <form action="{{route('cita_urgencias.update', $cita_urgencias->id)}}" method="POST" role="form" class="box">
                {{ csrf_field()}} 
                @method('put')
                <br>
                <div class="">
                    <label for="">Paciente</label>
                    <input readonly disabled type="select" name="nombre" value="{{$cita_urgencias-> paciente_id}}">
                </div>
                <div class="">
                    <label for="">Enfermero</label>
                    <input readonly disabled type="select" name="apellidos" value="{{$cita_urgencias-> enfermero_id}}">
                </div>
                <div class="">
                    <label for="">Médico</label>
                    <input readonly disabled type="select" class="" id="" value="{{$cita_urgencias-> medico_id}}">
                </div>
                <div class="">
                    <label for="">Fecha y hora</label>
                    <input readonly disabled type="datetime-local" id="" value="{{$cita_urgencias-> fecha_hora}}">
                </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-button type="button" class="bg-red-800 hover:bg-red-700">
                            <a href={{route('cita_urgencias.index')}}>
                                {{ __('Volver') }}
                            </a>
                        </x-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</x-app-layout>