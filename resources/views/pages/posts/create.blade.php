@extends('layouts.admin')
@section('content')
{{ Form::model($post, array('url' => '/admin/posts/'.$post->id)) }}
<div class="row">
<div class="col-md-9">
    <div class="card">
        <h5 class="card-header">New Post</h5>
        <div class="card-body">
            @isset($post->id)
                {{ method_field('PUT') }}
            @endisset
            {{ Form::bsText('title') }}
            {{ Form::bsText('author') }}
            {{ Form::bsTextArea('content',null,[],'summernote') }}
            {{ Form::bsText('slug') }}
        </div>
    </div>
</div>

<div class="col-md-3">
    <div class="card post-settings">
    <h5 class="card-header">Settings</h5>
    {{ Form::bsToggle('page_only','Page Only',null,false,['data-toggle'=>'toggle']) }}
    {{ Form::bsToggle('published','Publish',null,false,['data-toggle'=>'toggle']) }}
    {{ Form::bsToggle('show_in_menu','Show In Menu',null,false,['data-toggle'=>'toggle']) }}
    </div>
</div>
</div>
{{ Form::bsSubmit('Submit') }}
{{ Form::close() }}
@stop
