

<html lang   ="en">
    <head>
        <meta charset="UTF   -8" >
        <meta name   ="viewport" content="width=device-width, initial-scale=1.0">
        <meta http   -equiv="X-  UA -Compatible" content="ie=edge">
        <title>Reporte de mesas</title>
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
<h1 align="center">Listado de mesas</h1>
    <hr><br>
    <table>                                       
    <tr>          
        <th>id</th>
        <th>num_mesa</th>
        <th>Capacidad_max</th>
        <th>Estado</th> 
        </tr>  @foreach ($data as   $item)
        <tr>
            <td style="background-color: bisque">{{ $item['id']}}</td>
            <td>{{$item['num_mesa']}}</td>
            <td>{{$item['capacidad_max']}}</td>
            <td>{{$item['estado']}}</td>
            
        </tr>
         @endforeach
        </table>
    </body>
     </html>