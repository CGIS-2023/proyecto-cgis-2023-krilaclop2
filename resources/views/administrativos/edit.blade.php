<!DOCTYPE html>
<html>
<meta charset="utf-8">
        <title>Editar Administrativos</title>
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
    <legend>Información del Administrativo</legend>
    <br>
    <form action="{{route('administrativos.update', $administrativo->id)}}" method="POST" role="form" class="box">
        {{ csrf_field()}} 
        @method('put')
        <br>
        <div class="py-12">
            <label for="">Nombre</label>
            <input type="text" name="nombre" value="{{$administrativo-> nombre}}">
        </div>
        <div class="py-12">
            <label for="">Apellidos</label>
            <input type="text" name="apellidos" value="{{$administrativo-> apellidos}}">
        </div>
        <div class="">
                <label for="">DNI</label>
                <input type="text" class="" id="" value="{{$administrativo-> dni}}">
        </div>
        <div class="">
            <label for="">Sexo</label>
            <select name="sexo" id="sexo">
                <option value="Femenino" {{($administrativo->sexo == 'Femenino')? 'selected': ''}}>Femenino</option>
                <option value="Masculino" {{($administrativo->sexo == 'Masculino')? 'selected': ''}}>Masculino</option>
                <option value="Otro" {{($administrativo->sexo == 'Otro')? 'selected': ''}}>Otro</option> 
            </select>
        </div>
            <div class="">
                <label for="">Fecha de Nacimiento</label>
                <input type="date" class="form-date" id="" value="{{$administrativo-> fecha_nacimiento}}">
            </div>
            <div class="">
                <label for="">Correo</label>
                <input type="text" class="" id="" value="{{$administrativo-> correo}}">
            </div>
            <a href="/administrativos" class="buttonCancelar">Cancelar</a>
            <button type="submit">Guardar Cambios</button>
            <br>
    </form>
    </body>
</html>