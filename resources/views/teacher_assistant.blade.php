
@extends('layout')
@section('content')

<div>
    <div class="table-title">
        teacher assistant list
        <a href="{{URL::to('addteacher/assistant')}}"><span onclick="openPage('')" class="fs1 btn-right" aria-hidden="true" data-icon="l"></span></a>
    </div>
    <script>
        $(document).ready(function() {
            var table = $('#teacher-ass-table').DataTable({
                "order": [[ 1, "desc" ]],
                "oLanguage": {
                    "sInfo": "Showing _START_ to _END_ of _TOTAL_ items."
                }

            });
            $("#teacher-ass-table .th-fill").each( function ( i ) {
                    var select = $('<select class="form-control"><option value="">--select--</option></select>')
                        .appendTo( $(this).empty() )
                        .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );

                        table.column( i )
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
                    // Get the Status values a specific way since the status is a anchor/image

                    table.column( i ).data().unique().sort().each( function ( d, j ) {
                        select.append( '<option value="'+d+'">'+d+'</option>' );
                    } );

            } );
            $('#searchInput').on( 'keyup', function () {
                table.search( this.value).draw();
            } );
    } );

    </script>
    <div class="toolbar-teacher">
        <div class="search-bar">
            <div class="form-group">
                <input id="searchInput" class="form-control" placeholder="Search"/>
            </div>
        </div>
    </div>
    <div style="width:100%;">
        <table id="teacher-ass-table" class="table table-striped table-bordered table-striped" style="width:100%;">
            <thead>
                <tr>
                    <th class="th-fill">Fullname</th>
                    <th class="th-fill">Username</th>
                    <th class="th-fill">Phone</th>
                    <th class="th-fill">Email</th>
                    <th class="th-fill">Language</th>
                    <th class="th-fill">Status</th>
                </tr>
                <tr>
                    <th>Fullname</th>
                    <th>Username</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Language</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teacher_assistant as $value)
                    <tr class="edit" onclick="location.href='{{url::to('teacher/editassistant/'.$value->id)}}'">
                        <td>{{$value->fullname}}</td>
                        <td>{{$value->username}}</td>
                        <td>{{$value->phone}}</td>
                        <td>{{$value->email}}</td>
                        <td id="cell-lang" value="<?php if($value->language == 'English') {echo '1';} elseif($value->language == 'Vietnamese') {echo '2';} else {echo '0';}?>">{{$value->language}}</td>
                        <td>{{$value->status}}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>


@endsection
