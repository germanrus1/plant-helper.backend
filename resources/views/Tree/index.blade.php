@extends('layouts.tree.main')

@section('title', 'Главная')

@section('content')
    <h2>Это - содержимое страницы.</h2>
    @foreach ($trees as $tree)
        <div>
            <p>Это пользователь{{ $tree->id }}</p>
            <p>Это пользователь{{ $tree->name }}</p>
            <p>Это пользователь{{ $tree->description }}</p>
        </div>
    @endforeach
@stop
