<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#" style="color:#777"><span style="font-size:15pt">&#9820;</span> Empresa</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if( true || Auth::check() )
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class ="nav-link" href="{{route('home')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('services.index') }}">Servicios</a></li>
                    <li class="nav-item"><a class ="nav-link" href="{{route('projects.index')}}">Proyectos</a></li>
                    <li class="nav-item"><a class ="nav-link" href="{{route('customers.index')}}">Clientes</a></li>
                    <li class="nav-item"><a class ="nav-link" href="{{route('blogs.index')}}">Blog</a></li>
                    <li class="nav-item"><a class ="nav-link" href="{{route('contacts.index')}}">Contacto</a></li>
                </ul>
            </div>
        @endif
    </div>
</nav>
