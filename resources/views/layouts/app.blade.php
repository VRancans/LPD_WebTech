<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/app.css">
    <title>Learn and Freerun</title>
</head>
<body>
  @include ('inc.navbar')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 sidebar">
        @include ('inc.sidebar')
      </div>
      <div class="col-md-8 content">
        @if(count($errors) >0)
          @foreach($errors->all() as $error)
            <div class="alert alert-danger">
              {{$error}}
            </div>
          @endforeach
        @endif

        @if(session('post_success'))
          <div class="alert alert-success">
            {{session('post_success')}}
          </div>
        @endif
        @if(session('submission_success'))
          <div class="alert alert-success">
            {{session('submission_success')}}
          </div>
        @endif

        @yield('content')
      </div>
    </div>
</div>
</body>
</html>
