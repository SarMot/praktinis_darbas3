@extends('layouts.app')

@section("content")
    <div class="container">

        <h2>{{$school->id}}. {{$school->name}} {{$school->description}}</h2>
        <p>Group id: {{$school->place}}</p>
        <img src="{{$school->phone}}" alt="{{$school->name}}" style="width:auto">
    </div>
@endsection
