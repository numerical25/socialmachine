@foreach(App\Post::getMenu() as $item)
<li class="nav-item {{ request()->is('page/'.$item->slug) ? 'active' : '' }}">
    <a class="nav-link" href="/page/{{$item->slug}}">{{ $item->title }}</a>
</li>
@endforeach