

<html lang   ="en">
    <head>
        <meta charset="UTF   -8" >
        <meta name   ="viewport" content="width=device-width, initial-scale=1.0">
        <meta http   -equiv="X-  UA -Compatible" content="ie=edge">
        <title>Reporte de Usuarios</title>
        <style> 
            table { 
              width:  100%; 
                font-size  : 18px;
                border:1px   solid black; 
                border-collapse: collapse;
                }   
            th {
                        
                background-color: burlywood;
                border:1px   solid black; 
                }
            td { 
                border:1px   solid black;
                }
        </style>
    </head> 
<body>
<h1 align="center">Listado de Usuarios</h1>
    <hr><br>
    <table>                                       
    <tr>
       
		<th>Id User</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Correo</th>
        <th>Username</th>
		<th>Telefono</th>
		<th>Rol</th>
        <th></th>   
        </tr>  @foreach ($data as   $item)
        <tr>
            <td style="background-color: bisque">{{ $item['id']}}</td>
            <td>{{$item['name']}}</td>
            <td>{{$item['lastname']}}</td>
            <td>{{$item['email']}}</td>
            <td>{{$item['username']}}</td>
            <td>{{$item['telephone']}}</td>
            <td>{{$item['id_rol']}}</td>
        </tr>
         @endforeach
        </table>
    </body>
     </html>