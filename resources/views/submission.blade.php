@extends ('layouts.app')
@section ('content')
<div class="jumbotron">
  <h1 class="text-center">This is the submission page.</h1>
  <p class="text-center">Here you can view submissions and if you are registered, also make submissions</p>
</div>
<div class="container py-2">
  @if (!Auth::guest())
  <div class="list-group  float-right">
    <div class="list-group-item">
      <a href="/submission/create" class="btn btn-info" role="button">Make a Submission</a>
    </div>
    <div class="list-group-item">
      <a href="/submission/view" class="btn btn-info" role="button">My Submissions</a>
    </div>
  </div>
  @endif
  <div class="list-group">
    @if(count($submissions) > 0)
      @foreach($submissions as $submission)
        <div class="bg-white border list-group-item">
            <div class="row bg-light">
              <h2 class="text-dark">{{$submission->title}}</h2>
            </div>
            <p>{{$submission->description}}</p>
            <p class="text-success text-right">{{$submission->user->name}}</p>
            @if (!Auth::guest() && Auth::user()->isAdmin())
              <p class="text-left small">
                <a href="/submission/delete">Delete post</a>
              </p>
            @endif
        </div>
      @endforeach
    @else
      <div class="alert alert-info">
        <p>No submissions have been made</p>
      </div>
    @endif
  </div>
</div>
@endsection
