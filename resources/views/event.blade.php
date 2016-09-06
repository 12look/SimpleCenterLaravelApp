@extends('app')

@section('title', $event->name)

@section('content')
    <!-- Main Content -->
    <div class="container">

    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h2>{{ $event->name }}</h2>
                    {!! $event->description !!}
                    @foreach($event->photos as $photo)
                        <img src="/{{$photo}}" class="img-thumbnail" width="300" height=="300">
                    @endforeach
                </div>
            </div>
        </div>
    </article>
    </div>
@endsection