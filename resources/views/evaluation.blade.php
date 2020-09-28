
@extends('layout')
@section('content')

<div>
    <div class="table-title">
        Teacher Evaluation
        <a href="{{URL::to('add-evaluation')}}"><span class="fs1 btn-right" aria-hidden="true" data-icon="l"></span></a>

    </div>
    <div style="width:100%;">
        <table id="evaluation-table" class="table table-striped table-bordered table-striped" style="width:100%;">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Time</th>
                    <th>Date</th>
                    <th>Class</th>
                    <th>School</th>
                    <th>Teacher</th>
                    <th>Att</th>
                    <th>Des</th>
                    <th>Pun</th>
                    <th>Asg</th>
                    <th>Pre</th>
                    <th>Fri</th>
                    <th>Fun</th>
                    <th>Atm</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($evaluations as $value)
                    <tr>
                        <td>{{$value->username}}</td>
                        <td>{{$value->date}}</td>
                        <td>{{$value->teacher}}</td>
                        <td>{{$value->time}}</td>
                        <td>{{$value->school}}</td>
                        <td>{{$value->class}}</td>
                        <td>
                            @if($value->Attire == 0)
                                <span title="Proper" class="fs1 good" aria-hidden="true" data-icon=""></span>
                            @else
                                <span title="Not Proper" class="fs1 bad" aria-hidden="true" data-icon=""></span>
                            @endif
                        </td>
                        <td><span class="fs1" aria-hidden="true" data-icon=""></span></td>
                        <td>
                            @if($value->punctuality == 0)
                                <span title="On Time" class="fs1 good" aria-hidden="true" data-icon=""></span>
                            @else
                                    <span title="Late" class="fs1 bad" aria-hidden="true" data-icon=""></span>
                            @endif
                        </td>
                        <td>
                            @if($value->assignlessions == 0)
                                <span title="Match perfectly" class="fs1 good" aria-hidden="true" data-icon=""></span>
                            @elseif($value->assignlessions == 1)
                                <span title="Acceptable" class="fs1 even" aria-hidden="true" data-icon="N"></span>
                            @else
                                <span title="Could improve" class="fs1 bad" aria-hidden="true" data-icon=""></span>
                            @endif
                        </td>
                        <td>
                            @if($value->teachingpreparation == 0)
                                <span title="Match perfectly" class="fs1 good" aria-hidden="true" data-icon=""></span>
                            @elseif($value->teachingpreparation == 1)
                                <span title="Acceptable" class="fs1 even" aria-hidden="true" data-icon="N"></span>
                            @else
                                <span title="Could improve" class="fs1 bad" aria-hidden="true" data-icon=""></span>
                            @endif
                        </td>
                        <td>
                            @if($value->friendliness == 0)
                                <span title="Match perfectly" class="fs1 good" aria-hidden="true" data-icon=""></span>
                            @elseif($value->friendliness == 1)
                                <span title="Acceptable" class="fs1 even" aria-hidden="true" data-icon="N"></span>
                            @else
                                <span title="Could improve" class="fs1 bad" aria-hidden="true" data-icon=""></span>
                            @endif
                        </td>
                        <td>
                            @if($value->funactivities == 0)
                                <span title="Match perfectly" class="fs1 good" aria-hidden="true" data-icon=""></span>
                            @elseif($value->funactivities == 1)
                                <span title="Acceptable" class="fs1 even" aria-hidden="true" data-icon="N"></span>
                            @else
                                <span title="Could improve" class="fs1 bad" aria-hidden="true" data-icon=""></span>
                            @endif
                        </td>
                        <td>
                            @if($value->atmosphere == 0)
                                <span title="Match perfectly" class="fs1 good" aria-hidden="true" data-icon=""></span>
                            @elseif($value->atmosphere == 1)
                                <span title="Acceptable" class="fs1 even" aria-hidden="true" data-icon="N"></span>
                            @else
                                <span title="Could improve" class="fs1 bad" aria-hidden="true" data-icon=""></span>
                            @endif
                        </td>
                        <td>
                            <div class="">
                                <a href="edit-evaluation/{{$value->id}}"><span class="fs1" aria-hidden="true" data-icon="j"></span></a>
                                <a href="delete-evaluation/{{$value->id}}"><span class="fs1" aria-hidden="true" data-icon=""></span></a>
                                <span class="fs1" aria-hidden="true" data-icon="b"></span>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
