@extends('adminlte::page')

@section('title', 'Proyecto RSU')

@section('content_header')
    <h1>Nueva marca</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.brands.store') }}">
                @csrf
                @include('admin.brands.template.form')
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Registrar</button>
                <a href="{{ route('admin.brands.index') }}" class="btn btn-danger">Retornar</a>
            </form>
        </div>
    </div>
@endsection

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop
