<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="/">Social Machine</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        @foreach(App\Post::getMenu() as $item)
        <li class="nav-item">
        <a class="nav-link" href="/page/{{$item->slug}}">{{ $item->title }}</a>
        </li>
        @endforeach
        {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li> --}}

    </ul>
    <form class="form-inline my-2 my-lg-0" action="/page/search" method="GET">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Welcome
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/login">Login</a>
                    <a class="dropdown-item" href="/register">Register</a>
                    <div class="dropdown-divider"></div>
                    <a  class="dropdown-item" 
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                        href="{{ route('logout') }}">Logout</a>
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