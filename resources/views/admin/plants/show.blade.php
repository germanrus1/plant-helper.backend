@extends('adminlte::page')

@section('title', 'Dashboard')

<?
/**
 * @var \App\Models\Plants $plant
 * @var \App\Models\PlantFamilies $family
 */
?>
@section('content_header')
    <h1>{{$plant->name}}</h1>
@stop

@section('content')
    @include('admin.plants._form')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
