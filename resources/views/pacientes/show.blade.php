<!DOCTYPE html>
<html>
<meta charset="utf-8">
        <title>Ver Paciente</title>
        <style>
            .box{
            width: 800px;
            height: 800px;
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
                background-color: white;
            }

            input[type=text]:focus {
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
                background-color: #CD5C5C;
            }

            legend {
                font-size: 25px;
                align-items: center;
                display: flex;
                justify-content: center;
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

        </style>
    </head>
    <body>
    <legend>Información del Paciente</legend>
    <br>
    <form action="{{route('pacientes.update', $paciente->id)}}" method="POST" role="form" class="box">
        {{ csrf_field()}} 
        @method('put')
        <br>
        <div class="py-12">
            <label for="">Nombre</label>
            <input readonly disabled type="text" name="nombre" value="{{$paciente-> nombre}}">
        </div>
        <div class="py-12">
            <label for="">Apellidos</label>
            <input readonly disabled type="text" name="apellidos" value="{{$paciente-> apellidos}}">
        </div>
        <div class="">
                <label for="">DNI</label>
                <input readonly disabled type="text" class="" id="" value="{{$paciente-> dni}}">
        </div>
        <div class="">
            <label for="">Sexo</label>
            <select readonly disabled name="sexo" id="sexo">
                <option value="F" {{($paciente->sexo == 'Femenino')? 'selected': ''}}>Femenino</option>
                <option value="M" {{($paciente->sexo == 'Masculino')? 'selected': ''}}>Masculino</option>
                <option value="O" {{($paciente->sexo == 'Otro')? 'selected': ''}}>Otro</option> 
            </select>
        </div>
            <div class="">
                <label for="">Fecha de Nacimiento</label>
                <input readonly disabled type="date" class="form-date" id="" value="{{$paciente-> fecha_nacimiento}}">
            </div>
            <div class="">
                <label for="">Seguro</label>
                <select readonly disabled name="seguro">
                    <option value="Adeslas" {{($paciente->seguro == 'Adeslas')? 'selected': ''}}>Adeslas</option>
                    <option value="Asisa" {{($paciente->seguro == 'Asisa')? 'selected': ''}}>Asisa</option>
                    <option value="MAPFRE" {{($paciente->seguro == 'MAPFRE')? 'selected': ''}}>MAPFRE</option>
                    <option value="Sanitas" {{($paciente->seguro == 'Sanitas')? 'selected': ''}}>Sanitas</option>
                    <option value="None" {{($paciente->seguro == 'None')? 'selected': ''}}>None</option>
                </select>
            </div>
            <div class="">
                <label for="">Correo</label>
                <input readonly disabled type="text" class="" id="" value="{{$paciente-> correo}}">
            </div>
    </form>
    <br>
        <a href="/pacientes" class="buttonCancelar">Volver</a>
    </body>
</html>