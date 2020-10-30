
@extends('layout')
@section('content')

<div>
    <div class="table-title">
        course list
    <a href="{{URL::to('addcourse')}}"><span onclick="openPage('')" class="fs1 btn-right" aria-hidden="true" data-icon="l"></span></a>
    </div> 
    <script>
        $(document).ready(function() {
            var table = $('#course-table').DataTable({
                "order": [[ 0, "desc" ]],
                "oLanguage": {
                    "sInfo": "Showing _START_ to _END_ of _TOTAL_ items."
                }

            });
            $("#course-table .th-fill").each( function ( i ) {
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
    <div class="toolbar-table">
        <div class="search-bar">
            <div class="form-group">
                <input id="searchInput" class="form-control" placeholder="Search"/>
            </div>
        </div>
    </div>
    <table id="course-table" class="table table-striped table-bordered table-striped" style="width:100%">
        <thead>
            <tr>
                <th class="th-fill">Course</th>
                <th class="th-fill">Unit</th>
                <th class="th-fill">Resource</th>
                <th class="th-fill">Duration(min)</th>
                <th class="th-fill">Action</th>
            </tr>
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
            <td><a href="course_edit/{{$values->id}}">Edit or Delete</a></td>
            </tr>
                @endforeach


    </table>
</div>


@endsection
