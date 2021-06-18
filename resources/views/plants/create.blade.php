@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Добавить растение</h1>
@stop
<?
/**
 * @var \App\Models\Plants $plant
 * @var \App\Models\PlantFamilies $family
 */
?>
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Заполните поля</h3>

            <div class="card-tools">
            </div>
        </div>
        <div class="card-body">
            <form action="/admin/plants" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Название</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{$plant->name}}">

                </div>
                <div class="form-group">
                    <label for="description">Описание</label>
                    <textarea id="description" name="description" class="form-control" rows="4" value="{{$plant->desctiption}}"></textarea>
                </div>
                <div class="form-group">
                    <label for="family">Семейство</label>
                    <select id="family" name="family" class="form-control custom-select">
                        <option selected="" disabled="">Выберите семейство</option>
                        @foreach($families as $family)
                            <option>{{$family->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tags">Теги</label>
                    <input type="text" id="tags" name="tags" class="form-control" value="{{$plant->tags}}">
                </div>
                <div class="form-group">
                    <label for="range">Project Leader</label>
                    <input type="text" id="range" name="range" class="form-control" value="{{$plant->range}}">
                </div>
                <button type="submit" class="btn-success">Создать</button>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
