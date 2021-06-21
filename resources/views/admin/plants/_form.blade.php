
<?
/**
 * @var \App\Models\Plants $plant
 * @var \App\Models\PlantFamilies $family
 */
?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Заполните поля</h3>

        <div class="card-tools">
        </div>
    </div>
    <div class="card-body">
        @if($plant->errors)
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($plant->errors as $error)
                        <li>{{$error->message}}</li>
                    @endforeach
                </ul>
                This is a danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
        @endif
        <form action="/admin/plants<?= !$plant->exists ? :'/'.$plant->id?>" method="post">
            @csrf
            @if($plant->exists) @method('PUT') @endif
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
            <button type="submit" class="btn-<?= $plant->exists ? 'primary' : 'success'?>">@if($plant->exists) Обновить @else Создать @endif</button>
        </form>
    </div>
</div>

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        @if($message = Session::get('plants.message'))
        $(document).Toasts('create', {
            title: 'Успешно',
            body: '{{$message['message']}}',
            autohide: true,
            delay: 2500,
            class: 'bg-{{$message['type']}}'
        })
        @endif
    </script>
@stop
