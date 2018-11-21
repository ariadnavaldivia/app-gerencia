@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">Usuarios</div>

    <div class="panel-body">
        @if (session('notification'))
            <div class="alert alert-success">
                {{ session('notification') }}
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="" method="POST" id="registroproyecto">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Nombre</label>
                <input id="name" type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="description">Descripción</label>
                <input id="description" type="text" name="description" class="form-control" value="{{ old('description') }}" required>
            </div>
            <div class="form-group">
                <label for="start">Fecha de inicio</label>
                <input type="date" name="start" class="form-control" value="{{ old('start', date('Y-m-d')) }}" >
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Registrar proyecto</button>
            </div>
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Fecha de inicio</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->start ?: 'No se ha indicado' }}</td>
                    <td>                        
                        @if ($project->trashed())
                        <a href="{{url('proyecto',[$project->id,'restaurar'])}}" class="btn btn-sm btn-success" title="Restaurar">
                            <span class="glyphicon glyphicon-repeat"></span>
                        </a>
                        @else
                        <a href="{{url('proyecto',[$project->id])}}" class="btn btn-sm btn-primary" title="Editar">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        <a href="{{url('proyecto',[$project->id,'eliminar'])}}" class="btn btn-sm btn-danger" title="Dar de baja">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section("scripts")
    <script type="text/javascript">
        $("#registroproyecto").validate({
            messages:{
                name:"Ingresar nombre",
                description:"Ingresar descripcion",

            }
        });
    </script>

@endsection
