<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/fondo_edit.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/light-bootstrap-dashboard.css') }}">

    @yield('styles')

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
   

<div class="wrapper">

@include('includes.menu')

<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
                    <div class="navbar-wrapper" >
                        
                        @if (auth()->check())
                        <form >
                            <div class="">
                            <select style="width:280px" id="list-of-projects" class="form-control">
                                @foreach (auth()->user()->list_of_projects as $project)
                                <option value="{{ $project->id }}" @if($project->id==auth()->user()->selected_project_id) selected @endif>{{ $project->name }}</option>
                                @endforeach
                            </select>
                            </div>
                        </form>
                        @endif
                    </div>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">


                    @if (Auth::guest()) 
                        <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">
                            <span class="no-icon" class="d-lg-none">Login</span></a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="{{ url('/register') }}">
                            <span class="no-icon" class="d-lg-none">Registro</span></a></li>
                        </a></li> -->
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        Cerrar sesión
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                            </div>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                    
                        @yield('content')

                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <nav>
                
                <p class="copyright text-center">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    Universidad Nacional de Trujillo
                </p>
            </nav>
        </div>
    </footer>


</div>



    <!-- Scripts -->
    <script type="text/javascript" src="{{asset('/js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/popper.min.js') }}"></script>

    <script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
    <script type="text/javascript" src="{{asset('/jquery_validate/dist/jquery.validate.js')}}"></script>
    <!-- Upload image profile -->
    <script type="text/javascript" src="{{ asset('/js/image-profile.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/js/light-bootstrap-dashboard.js') }}"></script>


    @yield('scripts')
</body>
</html>
