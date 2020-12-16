@extends('layouts.app')

@section('content')
  <h1>Messages</h1>
  <!sets the h1 content where it's supposed to be within the body tags->
  @if(count($messages) > 0)
    @foreach($messages as $message)
    <ul class="list-group">
      <li class="list-group-item">Name: {{$message->name}}</li>
      <li class="list-group-item">Email: {{$message->email}}</li>
      <li class="list-group-item">Message: {{$message->message}}</li>
    </ul>
    @endforeach
  @endif
@endsection
