<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Nuevo Médico</title>
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
                display: block;
                width: 80px;
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
                align-items: center;            }

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
            <form action="/medicos" method="POST" role="form" class="box">
            {{ csrf_field() }}
            <br>
            <div class="">
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="" id="" placeholder="Introduzca un nombre">
            </div>
            <div class="">
                <label for="">Apellidos</label>
                <input type="text" name="apellidos" class="" id="" placeholder="Introduzca un apellido">
            </div>
            <div class="">
                <label for="">DNI</label>
                <input type="text" name="dni" class="" id="" placeholder="Introduzca el DNI">
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
                <input type="date" name="fecha_nacimiento" class="form-date" id="" placeholder="Seleccione una fecha">
            </div>
            <div class="">
                <label for="">Correo</label>
                <input type="text" name="correo" class="" id="" placeholder="Introduzca un correo electrónico">
            </div>
            <div class="">
                <label for="">Especialidad</label>
                <select name="especialidad" id="" placeholder="Seleccione una especialidad">
                    <option value="Alergología">Alergología</option>
                    <option value="Cardiología">Cardiología</option>
                </select>
            </div>
            <div>
            <a href="/medicos" class="buttonCancelar">Cancelar</a>
            <button type="submit">Guardar</button>
            </div>
        </form>
</body>
</html>