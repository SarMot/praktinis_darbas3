@extends('layouts.app')


@section("content")

<div class="container">
<table class="table table-striped">


<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Place</th>
    <th>Phone</th>
</tr>

@foreach ($schools as $school)
    <tr>
        <td>{{$school->id}}</td>
        <td>{{$school->name}}</td>
        <td>{{$school->place}}</td>
        <td>{{$school->phone}}</td>
        <td>
           {{--}} <a class="btn btn-primary" href="{{route('school.show',[$school])}}">Show</a>  --}}
           {{--<a class="btn btn-secondary" href="{{route('student.edit',[$student])}}">Edit</a> --}}
           {{--}} <form method="POST" action="{{ route('student.destroy',[$student]) }}">
                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>--}}
        </td>
        {{-- <td><img src="{{$student->image_url}}" alt="{{$student->name}}" /></td> --}}
    </tr>
@endforeach

</table>
</div>

@endsection
