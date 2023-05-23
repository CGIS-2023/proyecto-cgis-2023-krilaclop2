<x-app-layout>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Nuevo Paciente</title>
        <style>
            .box{
            width: 800px;
            height: 50px;
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
            <form action="/unidades" method="POST" role="form" class="box">
            {{ csrf_field() }}
            <br>
            <div class="">
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="" id="" placeholder="Introduzca un nombre">
            </div>
            <div>
            <a href="/unidades/index">Cancelar</a>
            <button class="button-opt" type="submit">Guardar</button>
            </div>
        </form>
</body>
</html>
        </x-app-layout>