@extends('layouts.app')

@section("content")

<div class="container">
<table class="table table-striped">
     <tr>
         <th> ID </th>
         <th> Name </th>
         <th> Description</th>
         <th> Difficulity</th>
         <th> School ID </th>
     </tr>

     @foreach($attendancegroups as $attendancegroup)
       <tr>
           <td> {{$attendancegroup->id}}</td>
           <td> {{$attendancegroup->name}}</td>
           <td> {{$attendancegroup->description}}</td>
           <td> {{$attendancegroup->difficulity}}</td>
           <td> {{$attendancegroup->school_id}}</td>

        </tr>
       @endforeach
    </table>
    </div>



