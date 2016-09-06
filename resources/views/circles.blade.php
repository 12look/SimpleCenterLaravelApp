@extends('app')

@section('title', 'Кружки')

@section('content')
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h2>Кружки</h2>
            <ul class="list-group">
                @foreach ($circles as $circle)
                    <li class="list-group-item">{{$circle->name}}</li>
                @endforeach
            </ul>
            </div>
        </div>
    </div>
@endsection
