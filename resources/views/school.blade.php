
@extends('layout')
@section('content')
<style>
    .th{
        background:#dff0d8;
    }
    #bangtrong td, th {
    padding: 4px;
    border: 1px #ec8541 solid;
    width: 50%;
}
.tieude{
    background: #2d4259;
    color: white;
    text-align: center;
    font-size: 16px;
    width: 50%;
}
.edit::before{
    content: "\270f" !important;
    color: #bbddff;
}
.follow{
    background: white;
}
}
</style>
<div>
    <div class="table-title">
        school list
    <a href="{{URL::to('addschool')}}"><span class="fs1 btn-right" aria-hidden="true" data-icon="l"></span></a>
    </div>
    <table id="example" class="table table-striped table-bordered table-striped" style="width:100%">
        @foreach ($school as $values)


        <thead>
            <tr>
            <th class="tieude">Info <a href="{{URL::to('school-edit/'.$values->id)}}"><span  class="fs1 btn-right edit" aria-hidden="true" data-icon="l"></span></a></th>
                <th class="tieude">Follow-Up</th>
            </tr>
        </thead>
            <tr>
            <td>
                <table id="bangtrong" style="width:100%">
                    <tr>
                      <th class="th">Name</th>
                    <td>{{$values->name}}</td>
                    </tr>
                    <tr>
                      <th class="th">Proposing Date</th>
                    <td>{{$values->prodate}}</td>
                    </tr>
                    <tr>
                      <th class="th">Last update</th>
                      <td>{{$values->lastupdate}}</td>
                    </tr>
                    <tr>
                      <th class="th">Staff Name</th>
                    <td>{{$values->staffname}}</td>
                    </tr>
                    <tr>
                      <th class="th">School Type</th>
                    <td>{{$values->schooltype}}</td>
                    </tr>
                    <tr>
                      <th class="th">District</th>
                    <td>{{$values->district}}</td>
                    </tr>
                  </table>


            </td>
        <td class="follow">{{$values->followup}}</td>
            </tr>
            @endforeach

    </table>
</div>


@endsection
