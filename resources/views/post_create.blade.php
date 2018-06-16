@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
          {!! Form::open(['url' => 'post/submit', 'files' => true]) !!}
          <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter title'])}}
          </div>
          <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Enter description'])}}
          </div>
          <div class="form-group">
            {{Form::label('image', 'Add photo',['class' => 'control-label'])}}
            {{Form::file('image')}}
          </div>
          <div>
            {{Form::submit('Make The Post', ['class' => 'btn btn-primary'])}}
          </div>
          {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
