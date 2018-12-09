<div class="card post-settings">
<h5 class="card-header">Navigation Settings</h5>
    <ul>
        @foreach(Modules\CMS\Entities\Post::getMenu() as $item)
            <li>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" 
                            type="checkbox" 
                            name="children[]" 
                            {{($post->id == $item->id || in_array($item->id,$post->getParentKeysArray())? 'disabled':'')}}
                            id="inlineRadio1" value="{{$item->id}}">
                    <label class="form-check-label" for="inlineRadio1">{{$item->title}}</label>
                </div>
                @if($item->children)
                    @include('cms::pages.posts.create.navigation.subnav', ['children'=>$item->children])
                @endif
            </li>
        @endforeach
    </ul>
    {{-- {{ Form::bsToggle('page_only','Page Only',null,false,['data-toggle'=>'toggle']) }}
    {{ Form::bsToggle('published','Publish',null,false,['data-toggle'=>'toggle']) }}
    {{ Form::bsToggle('show_in_menu','Show In Menu',null,false,['data-toggle'=>'toggle']) }} --}}
</div>