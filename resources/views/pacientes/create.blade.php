<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Nuevo Paciente</title>
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
                padding: 16px 178px;
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
            .container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100%;
            }
            
        </style>
    </head>
    <body>
        <legend>Información del Paciente</legend>
        <br>
            <form action="/pacientes" method="POST" role="form" class="box">
            {{ csrf_field() }}
            <br>
            <div class="">
                <label for="">Nombre</label>
                <input type="text" class="" id="" placeholder="Introduzca un nombre">
            </div>
            <div class="">
                <label for="">Apellidos</label>
                <input type="text" class="" id="" placeholder="Introduzca un apellido">
            </div>
            <div class="">
                <label for="">DNI</label>
                <input type="text" class="" id="" placeholder="Introduzca el DNI">
            </div>
            <div class="">
                <label for="">Sexo</label>
                <select name="sexo" id="" placeholder="Seleccione un sexo">
                    <option value="F">Femenino</option>
                    <option value="M">Masculino</option>
                    <option value="O">Otro</option>
                </select>
            </div>
            <div class="">
                <label for="">Fecha de Nacimiento</label>
                <input type="date" class="form-date" id="" placeholder="Seleccione una fecha">
            </div>
            <div class="">
                <label for="">Seguro</label>
                <select name="seguro" id="" placeholder="Seleccione un seguro">
                    <option value="Adeslas">Adeslas</option>
                    <option value="Asisa">Asisa</option>
                    <option value="MAPFRE">MAPFRE</option>
                    <option value="Sanitas">Sanitas</option>
                    <option value="None">None</option>
                </select>
            </div>
            <div class="">
                <label for="">Correo</label>
                <input type="text" class="" id="" placeholder="Introduzca un correo electrónico">
            </div>
        </form>
        <br>
        <div class="container">
                <form action="/pacientes" method="GET" role="form">
                    @csrf
                    <button type='submit' class="buttonCancelar">Cancelar</button>
                </form>
                <form action="/pacientes" method="POST" role="form">
                    @csrf
                    @method('store')
                    <button type='submit'>Guardar</button>
                </form>
        </div>
</body>
</html>