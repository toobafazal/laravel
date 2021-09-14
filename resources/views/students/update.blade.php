@extends('students.template')
@section('title','update')


@section('mainarea')
<h1>UPDATE STUDENT</h1>
<form method="POST" action="/students/update">
    @csrf()
    <input type="text" name="id" value="{{$data['id']}}" hidden>
    <input type="text" name="stuName" id="" placeholder="Your name" value="{{$data['stuName']}}">
    <input type="number" name="stuClass" id="" placeholder="YourClass" value="{{$data['stuClass']}}">
    <input type="submit" value="update" name="submit" class="btn btn-info">
</form> 
@endsection