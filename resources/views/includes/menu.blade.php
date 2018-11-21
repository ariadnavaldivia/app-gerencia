
<div class="sidebar" data-color="orange" data-image="../assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a  class="simple-text logo-mini">
                        I
                    </a>
                    <a  class="simple-text logo-normal">
                        Incidencias
                    </a>
                </div>

				@if (auth()->check())
				<div class="user">
					<form action="{{ url('/profile/image') }}" id="avatarForm">
						{{ csrf_field() }}
						<input type="file" style="display: none" id="avatarInput">
					</form>

					<div class="photo">
						@if(auth()->user()->image)
							<img src="{{ asset('images/users/'.auth()->id().'.'.auth()->user()->image ) }}" alt="user-img" id="avatarImage" title="{{ auth()->user()->name }}" class="img-circle  img-responsive">
						@else
							<img src="{{ asset('images/users/0.jpg') }}" alt="user-img" id="avatarImage" title="{{ auth()->user()->name }}" class="img-circle img-responsive">
						@endif
                    </div>
                    <div class="info">
                        <a class="">
                            <span id="textToEdit">{{ auth()->user()->name }}
                            </span>
                        </a>
                    </div>
                </div>
				@endif	

                    
                <ul class="nav">

					@if (auth()->check())
						<li class="nav-item " @if(request()->is('home')) class="active" @endif>
							<a class="nav-link" href="{{url('/home')}}">Inicio</a>
						</li>
						<!-- @if (! auth()->user()->is_client)
						<li class="nav-item " @if(request()->is('ver')) class="active" @endif>
						<a class="nav-link" href="{{url("/ver")}}">Ver incidencias</a>
						</li>
						@endif -->

						<li class="nav-item " @if(request()->is('reportar')) class="active" @endif>
							<a class="nav-link" href="{{url('/reportar')}}">Reportar incidencia</a>
						</li>

						@if (auth()->user()->is_admin)
						<li class="nav-item">
							<a class="nav-link" data-toggle="collapse" href="#formsExamples">
								<p>
									Administrar
									<b class="caret"></b>
								</p>
							</a>

							<div class="collapse " id="formsExamples">
								<ul class="nav">
									<li class="nav-item ">
										<a class="nav-link" href="{{url('/usuarios')}}">
											<span class="sidebar-normal">Usuarios</span>
										</a>
									</li>
									<li class="nav-item ">
										<a class="nav-link" href="{{url('/proyectos')}}">
											<span class="sidebar-normal">Proyectos</span>
										</a>
									</li>
									<li class="nav-item ">
										<a class="nav-link" href="{{url('/config')}}">
											<span class="sidebar-normal">Configuracion</span>
										</a>
									</li>
								</ul>
							</div>
							
						</li>
						@endif
					@else
						<li class="nav-item " @if(request()->is('/')) class="active" @endif><a class="nav-link" href="{{url('/')}}">Bienvenido</a></li>
						<li class="nav-item " @if(request()->is('instrucciones')) class="active" @endif><a class="nav-link" href="{{url('/instrucciones')}}">Instrucciones</a></li>
						<li class="nav-item " @if(request()->is('acerca-de')) class="active" @endif><a class="nav-link" href="{{url('/acerca-de')}}">Créditos</a></li>
					@endif

                </ul>
            </div>
</div>