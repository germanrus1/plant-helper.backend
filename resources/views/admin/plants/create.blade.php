@extends('adminlte::page')

@section('title', 'Создать растение')

<?
/**
 * @var \App\Models\Plants $plant
 * @var \App\Models\PlantFamilies $family
 */
?>

@section('content')
    @include('admin.plants._form')
@stop
