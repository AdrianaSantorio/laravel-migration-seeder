@extends('layouts.main')

@section('content')
<div class="container my-5">
    <div class="row g-4">
        @foreach ($trains as $train)
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title"> Train {{$train->company}} - {{$train->train_code}}</h5>
                  <p class="card-text">From <strong>{{$train->departure_station}}</strong> to <strong>{{$train->arrival_station}}</strong></p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Departure time {{$train->departure_time}}</li>
                  <li class="list-group-item">Arrival Time {{$train->arrival_time}}</li>
                  @if ($train->cancelled == 1)
                    <li class="list-group-item text-end"><em>Cancelled</em></li>
                  @elseif ($train->on_time == 0)
                  <li class="list-group-item text-end"><em>Delayed</em></li>
                  @else
                  <li class="list-group-item text-end"><em>On time</em></li>
                  @endif
                </ul>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection