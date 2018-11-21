@extends('layouts.app')

@section('styles')
<style>
	.img-responsive {
    	margin: 0 auto;
	}
</style>
@endsection

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading" align="center">Sistema de gestión de incidencias</div>
    <div class="panel-body text-center">
        <img src="/images/welcome.png" alt="Un sistema de gestión de incidencias (issue tracking system en inglés) es una 
        herramienta de software para la gestión de incidencias, issues, de proyectos. Una incidencia es 
        una solicitud de modificación 
        (MR, por sus siglas en inglés), corrección o mejora." class="img-responsive">

    </div>

</div>

@endsection