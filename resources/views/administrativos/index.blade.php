<x-app-layout>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Administrativos</title>
        <style>

.content-table {
                border-collapse: collapse;
                margin: 25px 0;
                text-align: center;
                font-size: 0.9em;
                min-width: 400px;
                border-radius: 5px 5px 0 0;
                overflow: hidden;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            }

            .content-table thead tr {
                background-color: #009879;
                color: #ffffff;
                text-align: center;
                font-weight: bold;
            }

            .content-table th,
            .content-table td {
                padding: 12px 15px;
            }

            .content-table tbody tr {
                border-bottom: 1px solid #dddddd;
                background-color: #f3f3f3;
                font-weight: bold;
            }

            body {
                margin: auto;
                padding: 50px;
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
                width: 10%
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
    <h2> Listado de Administrativos</h2>
    <!-- <input type="text" placeholder="Buscar..."> -->
    <table class="content-table">
        <thead class="content-table thead tr">
        <tr>
            <td> Nombre </td>
            <td> Apellidos </td>
            <td> DNI </td>
            <td> Sexo </td>
            <td> Fecha de Nacimiento </td>
            <td> Correo </td>
            <td> Opciones </td>
        </tr>
        </thead>
        <tbody class="content-table tbody tr:last-of-type">
        @foreach ($administrativos as $administrativo)
            <tr>
                <td>{{ $administrativo->nombre }}</td>
                <td>{{ $administrativo->apellidos }}</td>
                <td>{{ $administrativo->dni }}</td>
                <td>{{ $administrativo->sexo }}</td>
                <td>{{ $administrativo->fecha_nacimiento }}</td>
                <td>{{ $administrativo->correo }}</td>
                <td>
                <div class="container">
                    <form action="/administrativos/{{$administrativo->id}}">
                        @csrf
                        @method('show')
                        <button  class="button-opt" type='submit'>Ver</button>
                    </form>
                    <br>
                    <form action="/administrativos/{{$administrativo->id}}/edit">
                        @csrf
                        @method('edit')
                        <button  class="button-opt" type='submit'>Editar</button>
                    </form>
                    <br>
                    <form action="/administrativos/{{$administrativo->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <button  class="button-opt" type='submit'>Eliminar</button>
                    </form>
                </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
   <br>
   <form action="/administrativos/create">
        @csrf
        <button type='submit' class="button-opt">Nuevo Administrativo</button>
    </form>
   </body>
</html>
</x-app-layout>
