<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Social Machine</title>
  <meta name="description" content="Social Machine">
  <meta name="author" content="Anthony Gordon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- include summernote css/js-->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app">
    @include('includes.header')
    
    <div class="container-fluid">
        <nav class="nav nav-pills nav-justified dashboard-menu">
            <a class="nav-link {{ request()->is('admin/home') ? 'active' : '' }}" href="/admin/home">Dashboard</a>
            <a class="nav-link {{ request()->is('admin/posts/create') ? 'active' : '' }}" href="/admin/posts/create">New Post</a>
            <a class="nav-link {{ request()->is('admin/posts/all') ? 'active' : '' }}" href="/admin/posts/all">View Posts</a>
        </nav>
        @include('includes.message')
        <div>
            @yield('content')
        </div>
    </div>
  </div>

  @include('includes.footer')
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="{{ mix('js/app.js') }}"></script>
  <script src="{{ mix('js/cms.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
      $(document).ready(function() {
          $('.summernote').summernote();
      });
  </script>
</body>
</html>