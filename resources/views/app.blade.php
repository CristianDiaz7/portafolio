@extends('layouts.plantillaBase')
@section('titulo', 'Ruiz Diaz')
@section('body-class', 'inicio-fondo')
@section('contenido')

    @include('partials.inicio')
    @include('partials.tecnologias')
    @include('partials.servicios')
    @include('partials.contacto')

@endsection


