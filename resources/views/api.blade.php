<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Api</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <!-- Styles -->
</head>
<body>
    <div class="container p-5">
        <table id="usuarios" class="table table-bordered text-center">
            <thead class="table-dark">
                <tr >
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                    <th>DIRECCION</th>
                    <th>Telefono</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuariosArray as $usuario)
                <tr>
                    <td>{{$usuario['id']}}</td>
                    <td>{{$usuario['name']}}</td>
                    <td>{{$usuario['username']}}</td>
                    <td>{{$usuario['email']}}</td>
                    <td>
                        {{$usuario['address']['street']}} -
                        {{$usuario['address']['city']}} -
                        {{$usuario['address']['geo']['lng']}}
                    </td>
                    <td>{{$usuario['phone']}}</td>
                </tr>            
    @endforeach

            </tbody>
        </table>
        <div class="d-flex justify-content-center">
        {{-- {{ $usuariosArray->link('home')}} --}}
    </div>
</div>
</div>

 <!-- Scripts -->
 <script src="{{ asset('js/app.js') }}" defer></script>
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
 <script>
     $('#usuarios').DataTable({
        responsive: true,
        autoWidth: false,

        "language":{
            "lengthMenu": "Mostrar "+ 
            `<select>
            <option value="3">3</option>
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
            <option value="-1">all</option>
            </select>` 
            +" Registros por pagina",
            "zeroRecords": "Dato no encontrado",
            "info": "Mostrando la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No recors available",
            "infoFiltered": "(Filtrado de _MAX_ registros totales)",
            "search": "Buscar:",
            "paginate":{
                'next': 'Siguente',
                'previous': 'Anterior'
            }
        }
     });
 </script>
</body>
</html>