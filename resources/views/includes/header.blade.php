<nav class="navbar navbar-expand-lg navbar-light bg-light main-nav">
<a class="navbar-brand" href="/">Social Machine</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item  {{ request()->is('/') ? 'active' : '' }}">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        @include('includes.header.nav')
    </ul>
    <form class="form-inline my-2 my-lg-0" action="/page/search" method="GET">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Welcome
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @guest
                        <a class="dropdown-item" href="/login">Login</a>
                        <a class="dropdown-item" href="/register">Register</a>
                    @endguest
                    
                    @auth
                        <a class="dropdown-item" href="/home">Dashboard</a>
                    @endauth

                    @role('super-admin')
                        <a class="dropdown-item" href="/admin/home">Admin</a>
                    @endrole

                    @auth
                        <div class="dropdown-divider"></div>
                        <a  class="dropdown-item" 
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            href="{{ route('logout') }}">Logout</a>
                    @endauth
                </div>
            </li>
        </ul>
        <input class="form-control mr-sm-2" name="term" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: hidden;">
    {{ csrf_field() }}
</form>