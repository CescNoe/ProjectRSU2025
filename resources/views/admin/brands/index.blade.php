@extends('adminlte::page')

@section('title', 'Proyecto RSU')

@section('content_header')
    <h1>Lista de Marcas</h1>
@stop

@section('content')
    <p>Lista de marcas</p>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('content')
    <div class="card">
        div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Logo</th>
                        <th>Nombre</th>
                        <th>Fecha Creación</th>
                        <th>Fecha Actualización</th>
                        <th>Descripción</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Aquí irán las filas de la tabla con las marcas --}}
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
    </div>
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop