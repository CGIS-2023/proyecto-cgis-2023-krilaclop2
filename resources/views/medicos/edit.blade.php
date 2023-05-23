<!DOCTYPE html>
<html>
<meta charset="utf-8">
        <title>Editar Médico</title>
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
    <legend>Información del Médico</legend>
    <br>
    <form action="{{route('medicos.update', $medico->id)}}" method="POST" role="form" class="box">
        {{ csrf_field()}} 
        @method('put')
        <br>
        <div class="py-12">
            <label for="">Nombre</label>
            <input type="text" name="nombre" value="{{$medico-> nombre}}">
        </div>
        <div class="py-12">
            <label for="">Apellidos</label>
            <input type="text" name="apellidos" value="{{$medico-> apellidos}}">
        </div>
        <div class="">
                <label for="">DNI</label>
                <input type="text" class="" id="" value="{{$medico-> dni}}">
        </div>
        <div class="">
            <label for="">Sexo</label>
            <select name="sexo" id="sexo">
                <option value="Femenino" {{($medico->sexo == 'Femenino')? 'selected': ''}}>Femenino</option>
                <option value="Masculino" {{($medico->sexo == 'Masculino')? 'selected': ''}}>Masculino</option>
                <option value="Otro" {{($medico->sexo == 'Otro')? 'selected': ''}}>Otro</option> 
            </select>
        </div>
            <div class="">
                <label for="">Fecha de Nacimiento</label>
                <input type="date" class="form-date" id="" value="{{$medico-> fecha_nacimiento}}">
            </div>
            <div class="">
                <label for="">Correo</label>
                <input type="text" class="" id="" value="{{$medico-> correo}}">
            </div>
            <div class="">
                <label for="">Especialidad</label>
                <select name="especialidad">
                    <option value="Alergología" {{($medico->especialidad == 'Alergología')? 'selected': ''}}>Alergología</option>
                    <option value="Cardiología" {{($medico->especialidad == 'Cardiología')? 'selected': ''}}>Cardiología</option>
                </select>
            </div>
            <a href="/medicos" class="buttonCancelar">Cancelar</a>
            <button type="submit">Guardar Cambios</button>
            <br>
    </form>
    </body>
</html>