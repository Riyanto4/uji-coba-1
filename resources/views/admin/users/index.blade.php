@extends('layout.app')

@section('content')
<table>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">tanggal buat</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <td>{{$user -> id}}</td>
        <td>{{$user -> username}}</td>
        <td>{{$user -> create_at}}</td>
    </tbody>
</table>
@endsection