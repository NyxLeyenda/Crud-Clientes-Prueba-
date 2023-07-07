@extends('home')
@section('content')

<style>
    body{background: url("https://cdn.pixabay.com/photo/2017/08/30/01/05/milky-way-2695569_1280.jpg");
    background-repeat: no-repeat;
    background-size: 100vw 100vh;
    z-index: -3;
    background-attachment: fixed;
        }
</style>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br><br>
        <h3 class="text-white">Lista de Clientes</h3> 
        <br><br>

        <form class="d-flex" style="width:100%">
            <input class="form-control mr-sm-2" type="search" placeholder="Nombre del Cliente que buscas" aria-label="Search" name="texto">
            <button class="btn btn-info my-2 my-sm-0" type="submit">Buscar</button>
        </form>
        <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crear">
            Nuevo
          </button>
<div class="table-responsive">
    <br>
    <table class="table">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Telefono</th>                
                <th scope="col">Correo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
            <tr class="bg-white text-dark">
                <td scope="row">{{$cliente->ID}}</td>
                <td>{{$cliente->Nombre}}</td>
                <td>{{$cliente->Telefono}}</td>
                <td>{{$cliente->Correo}}</td>
                <td>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$cliente->ID}}">
                    Editar
                  </button>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$cliente->ID}}">
                    Eliminar
                  </button>
                </td>
            </tr>   
            @include('cliente.info')
            @endforeach
        </tbody>
    </table>
</div>
@include('cliente.crear')
    </div>













@endsection