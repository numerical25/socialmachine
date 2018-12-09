@extends('layouts.default')
@section('content')
@include('includes.jumbotron')
    @foreach ($posts as $p)
        <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <h2><a href="page/{{ $p->slug }}/">{{ $p->title }}</a></h2>
                <h4>Author: {{ $p->author }}</h4>
                <div>
                    {!! $p->content !!}
                </div>
        </div>
    @endforeach
    {{ $pagination }}
@stop
