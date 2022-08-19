@extends('layouts.app')

@section('content')
<div class="container">
            <table id="usuario" class="table table-bordered text-center">
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
@endsection
