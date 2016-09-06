@extends('app')

@section('title', 'Сотрудники')

@section('content')
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h2>Наши сотрудники</h2>
            <table class="table table-hover">
            <thead>
                <tr>
                    <th>ФИО</th>
                    <th>Телефон</th>
                </tr>
            </thead>
                @foreach ($workers as $worker)
                    <tr>
                        <td>{{$worker->fio}}</td>
                        <td>{{$worker->phone}}</td>
                    </tr>
                @endforeach
            </table>
            </div>
        </div>
    </div>
@endsection