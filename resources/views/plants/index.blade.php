@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Список растений</h1>
@stop

@section('content')
    <a href="plants/create" class="btn btn-success">
        Добавить
    </a>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Растения</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Скрыть">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%">
                        #
                    </th>
                    <th style="width: 20%">
                        Название
                    </th>
                    <th style="width: 30%">
                        Фото
                    </th>
                    <th>
                        Заполнен
                    </th>
                    <th style="width: 8%" class="text-center">
                        Проверен
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        Номер
                    </td>
                    <td>
                        <a>
                            Название
                        </a>
                        <br>
                        <small>
                            Создан 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                            </div>
                        </div>
                        <small>
                            57% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            Подробнее
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Редактировать
                        </a>
                        <a class="btn btn-danger btn-sm" href="#" onclick="confirm('Вы действительно хотите удалить?')">
                            <i class="fas fa-trash">
                            </i>
                            Удалить
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
            <!-- /.card-body -->
        <!-- /.card -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
