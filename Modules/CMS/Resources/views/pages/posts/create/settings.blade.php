<div class="card post-settings">
<h5 class="card-header">Settings</h5>
    {{ Form::bsToggle('page_only','Page Only',null,false,['data-toggle'=>'toggle']) }}
    {{ Form::bsToggle('published','Publish',null,false,['data-toggle'=>'toggle']) }}
    {{ Form::bsToggle('show_in_menu','Show In Menu',null,false,['data-toggle'=>'toggle']) }}
</div>