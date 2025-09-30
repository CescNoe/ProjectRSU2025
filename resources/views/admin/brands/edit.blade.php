@extends('adminlte::page')

@section('title', 'Proyecto RSU')

@section('content_header')
    <h1>Modificar marca</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($brand, ['route' => ['admin.brands.update', $brand], 'method' => 'PUT']) !!}
            @include('admin.brands.template.form')
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i>Actualizar</button>
            <a href="{{ route('admin.brands.index') }}" class="btn btn-danger">Retornar</a>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop
