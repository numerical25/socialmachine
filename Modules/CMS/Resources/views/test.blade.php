@inject('POST', Modules\CMS\Entities\Post)
@foreach($POST::getMenu() as $item)
    {{$item->title}}
@endforeach