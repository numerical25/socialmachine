@extends('layouts.admin')
@section('content')
<h1>View Posts</h1>
<table class="table">
        <caption>List of Posts</caption>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($posts as $p)
          <tr>
          <th scope="row">{{ $p->id }}</th>
            <td>{{ $p->title }}</td>
            <td>{{ $p->slug }}</td>
            <td>{{ $p->created_at }}</td>
            <td>{{ $p->updated_at }}</td>
            <td>  
            <a href="/admin/posts/{{ $p->id }}/edit">Edit</a>
                    <a href="">Delete</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      {{ $pagination }}
@stop