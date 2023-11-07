

<html lang   ="en">
    <head>
        <meta charset="UTF   -8" >
        <meta name   ="viewport" content="width=device-width, initial-scale=1.0">
        <meta http   -equiv="X-  UA -Compatible" content="ie=edge">
        <title>Reporte de reservaciones</title>
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
<h1 align="center">Listado de resrevaciones</h1>
    <hr><br>
    <table>                                       
    <tr>
        <th>id</th>          
        <th>id_cliente</th>
        <th>id_mesa</th>
        <th>fecha</th> 
        <th>num_personas</th>
        <th>ocasion</th>
        <th>comentario</th>
        <th>hora</th>
        <th>estado</th>
        </tr>  @foreach ($data as   $item)
        <tr>
            <td style="background-color: bisque">{{ $item['id']}}</td>
            <td>{{$item['id_cliente']}}</td>
            <td>{{$item['id_mesa']}}</td>
            <td>${{$item['fecha']}}</td>
            <td>{{$item['num_personas']}}</td>
            <td>{{$item['ocasion']}}</td>
            <td>{{$item['comentario']}}</td>
            <td>{{$item['hora']}}</td>
            <td>{{$item['estado']}}</td>
        </tr>
         @endforeach
        </table>
    </body>
     </html>