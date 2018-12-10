@inject('POST', Modules\CMS\Entities\Post)

@foreach($POST::getMenu() as $item)
@if(count($item->children))
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{$item->title}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach($item->children as $child)
                <a class="dropdown-item" href="/page/{{$child->slug}}">{{$child->title}}</a>
            @endforeach
        </div>
    </li>
@else 
    <li class="nav-item {{ request()->is('page/'.$item->slug) ? 'active' : '' }}">
        <a class="nav-link" href="/page/{{$item->slug}}">{{ $item->title }}</a>
    </li>
@endif
@endforeach