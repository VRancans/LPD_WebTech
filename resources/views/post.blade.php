@extends ('layouts.app')
@section ('content')
  <div class="jumbotron">
    <h1 class="text-center">This is the post page.</h1>
    <p class="text-center">Here you can see all the posts, that have been made by site managers</p>
  </div>
  <div class="container py-2">
    <div class="list-group">
      @if(count($posts) > 0)
        @foreach($posts as $post)
          <div class="bg-white border list-group-item">
              <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 div-centered text-center bg-secondary">
                    <a href="{{ url('post', $post->id) }}">
                      <h2 class="text-light"> {{$post->title}} </h2>
                    </a>
                </div>
              </div>
              <p class="text-dark">{{str_limit($post->description, $limit = 150, $end = '...(Click On Post To See More!)')}}</p>
          </div>
        @endforeach
      @else
        <div class="alert alert-info">
          <p>No posts have been made</p>
        </div>
      @endif
    </div>
    @if (!Auth::guest() && Auth::user()->isAdmin())
      <a href="/post/create">+ add new post</a>
    @endif
  </div>
@endsection
