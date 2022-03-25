@extends('layouts.main')

@section('content')
<ul>
    @foreach ($trains as $train)
        <li>{{$train->train_code}}</li>
    @endforeach
</ul>



@endsection