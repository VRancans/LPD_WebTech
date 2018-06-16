@extends ('layouts.app')
@section ('content')
<div class="container py-2">
  <div class="list-group  float-right">
    <div class="list-group-item">
      <a href="/submission/create" class="btn btn-info" role="button">Make a Submission</a>
    </div>
  </div>
  <div class="list-group">
  @if(count($submissions) > 0)
    @foreach($submissions as $submission)
      @if($submission->user->name == Auth::user()->name)
        <div class="bg-white border list-group-item">
          <div class="row bg-light">
            <h2 class="text-dark">{{$submission->title}}</h2>
          </div>
          <p>{{$submission->description}}</p>
          <p class="text-success text-right">{{$submission->user->name}}</p>
          <p class="text-left small">
            <a href="/submission/delete">Delete post</a>
          </p>
        </div>
      @endif
    @endforeach
  @else
    <div class="alert alert-info">
      <p>You have not made any Submissions</p>
    </div>
  @endif
  </div>
</div>
@endsection
