
<h1>Views</h1>
<table border=1>
    <thead>
        <tr>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Student Class</th>
            <th>Student admission</th>
            <th>Date Of Birth</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
@foreach($data as $dt)
<tr>
    <td>{{$dt['id']}}</td>
    <td>{{$dt['stuName']}}</td>
    <td>{{$dt['stuClass']}}</td>
    <td>{{$dt['created_at']}}</td>
    <td>{{$dt['updated_at']}}</td>
    <td><a href="/students/delete/{{$dt['id']}}">DELETE</a></td>

    </tr>
@endforeach
</tbody>
</table>
