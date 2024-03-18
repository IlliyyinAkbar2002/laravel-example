@extends('layouts.main')

@section('content')
    <h1>Services</h1>
    <p>Our services include...</p>
    <ul>
        @foreach($services as $service)
            <li>{{$service}}</li>
        @endforeach
    </ul>
@endsection