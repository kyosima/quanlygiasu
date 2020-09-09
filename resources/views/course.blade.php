
@extends('layout')
@section('content')

<div>
    <div class="table-title">
        course list
    <span onclick="openPage('{{URL::to('addcourse')}}')" class="fs1 btn-right" aria-hidden="true" data-icon="l"></span>
    </div>
    <table id="example" class="table table-striped table-bordered table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Course</th>
                <th>Unit</th>
                <th>Resource</th>
                <th>Duration(min)</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($course as $values)
            <tr>
            <td>{{$values->course}}</td>
            <td>{{$values->unit}}</td>
            <td>{{$values->resource}}</td>
            <td>{{$values->duration}}</td>
            <td><a href="course_edit/{{$values->id}}">Edit</a></td>
            </tr>
                @endforeach


    </table>
</div>


@endsection
