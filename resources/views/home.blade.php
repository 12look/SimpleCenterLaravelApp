@extends('app')

@section('content')
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            @foreach ($events as $event)
                <div class="post-preview">
                    <a href="{{URL::to('event/'.$event->id)}}">
                        <h2 class="post-title">
                            {{ $event->name }}
                        </h2>
                    </a>
                    <p class="post-meta">Место: {{ $event->place }} <br> Дата и время начала: {{ date('d.m.Y H:i', strtotime($event->whengo)) }}</p>
                </div>
                <hr>
            @endforeach
                <!-- Pager -->
                <?php echo $events->render(); ?>
            </div>
        </div>
    </div>
@endsection