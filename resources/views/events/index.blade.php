@extends('templates.default')
@section('content')
    <h1>Your Events</h1>
    <a href="{{route('events.create')}}" class="btn btn-primary">Add an event!</a>
    @if(!$events->count())
        You have no events highlighted yet!
    @else
      <div class="row" align="center">
        @foreach($events as $event)
            <div class="col-lg-4 my-2">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...There will be an image someday...">
                    <div class="card-body">
                        <h5 class="card-title">{{$event->title}}</h5>
                        <h6 class="card-title">{{$event->event_date}}</h6>
                        <p class="card-text">{{$event->body}}</p>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    @endif
@endsection
