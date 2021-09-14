@extends('students.template')
@section('title','View')


@section('mainarea')
<h1>Student Table</h1>
<div class="container text-center">
<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Student Class</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
@foreach($data as $dt)
<tr>
    <td>{{$dt['id']}}</td>
    <td>{{$dt['stuName']}}</td>
    <td>{{$dt['stuClass']}}</td>
    <td class="btn btn-danger fa fa-trash p-3 m-1"><a href="/students/delete/{{$dt['id']}}">DELETE</a></td>
    <td class="btn btn-success fa fa-pencil p-3 m-1"><a href="/students/update/{{$dt['id']}}">UPDATE</a></td>

    </tr>
@endforeach
</tbody>
</table>
</div>
@endsection