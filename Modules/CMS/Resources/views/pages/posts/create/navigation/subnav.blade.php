<ul>
    @foreach($children as $child)
        <li>
            <div class="form-check form-check-inline">
                    <input class="form-check-input" 
                            type="checkbox" 
                            name="children[]" 
                            {{($post->id == $child->id || in_array($child->id,$post->getParentKeysArray()) ? 'disabled':'')}}
                            id="inlineRadio1" value="{{$child->id}}">
                    <label class="form-check-label" for="inlineRadio1">{{$child->title}}</label>
            </div>
            @if($child->children)
                @include('cms::pages.posts.create.navigation.subnav', ['children'=>$child->children])
            @endif
        </li>
    @endforeach
</ul>