@extends('cms::layouts.admin')
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
    @include('cms::pages.posts.create.settings')
    @include('cms::pages.posts.create.navigation')
</div>
</div>
{{ Form::bsSubmit('Submit') }}
{{ Form::close() }}
@stop
