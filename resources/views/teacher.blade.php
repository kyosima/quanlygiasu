
@extends('layout')
@section('content')

<div>
    <div class="table-title">
        teacher list
    <a href="{{URL::to('addteacher')}}"><span onclick="openPage('')" class="fs1 btn-right" aria-hidden="true" data-icon="l"></span></a>
    </div>
    <script>
        $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script>
    <table id="example" class="table table-striped table-bordered table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Fullname</th>
                <th>Username</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Language</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teacher as $values)
            <tr>
            <td>{{$values->fullname}}</td>
            <td>{{$values->username}}</td>
            <td>{{$values->phone}}</td>
            <td>{{$values->email}}</td>
            <td>{{$values->language}}</td>
            <td>{{$values->status}}</td>
            <td><a href="{{url::to('teacher/'.$values->id)}}">Edit or Delete</a></td>
            </tr>
                @endforeach


    </table>
</div>


@endsection
