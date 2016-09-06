@extends('app')

@section('content')
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <h2>Расписание</h2>
            <table class="table table-hover">
            <thead>
                <tr>
                    <th>ФИО</th>
                    <th>пн</th>
                    <th>вт</th>
                    <th>ср</th>
                    <th>чт</th>
                    <th>пт</th>
                    <th>сб</th>
                    <th>вс</th>
                </tr>
            </thead>

            @foreach ($schedular as $sched)
                
            @endforeach
            </table>
            </div>
        </div>
    </div>
@endsection