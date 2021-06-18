@extends('layouts.tree.main')

@section('title', 'Главная')

@section('content')
    <h2>Это - содержимое страницы.</h2>

    {{Form::open(['url' => 'crete'])}}

    {{Form::label('name', 'Название')}}
    {{Form::label('description', 'Описание')}}
    {{Form::label('tags', 'Тег')}}

    {{Form::close()}}
@stop
