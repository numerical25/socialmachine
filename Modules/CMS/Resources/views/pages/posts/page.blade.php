@extends('cms::layouts.default')
@section('content')
<article>
        <h2>{{ $page->title }}</h2>
        <h3>Author: {{ $page->author}}</h3>
        {!! $page->content !!}
</article>
@include('cms::comments.index',['page'=>$page])
@stop
