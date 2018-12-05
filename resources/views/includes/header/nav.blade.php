@foreach(App\Post::getMenu() as $item)
<li class="nav-item">
<a class="nav-link" href="/page/{{$item->slug}}">{{ $item->title }}</a>
</li>
@endforeach