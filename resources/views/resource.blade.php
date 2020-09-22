
@extends('layout')
@section('content')

<div>
    <div class="table-title">
        resource
        <a href="{{URL::to('addresource')}}"><span onclick="openPage('')" class="fs1 btn-right" aria-hidden="true" data-icon="l"></span></a>
    </div>
    <script>
        $(document).ready(function() {
            var table = $('#resource-table').DataTable({
                "order": [[ 0, "desc" ]],
                "oLanguage": {
                    "sInfo": "Showing _START_ to _END_ of _TOTAL_ items."
                }

            });
            $("#resource-table .th-fill").each( function ( i ) {
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
    <div style="width:100%;">
        <table id="resource-table" class="table table-striped table-bordered table-striped" style="width:100%;">
            <thead>
                <tr>
                    <th class="th-fill">Name</th>
                    <th class="th-fill">Type</th>
                    <th class="th-fill">Note</th>
                </tr>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Note</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($resource as $value)
                    <tr class="edit" onclick="location.href='{{url::to('resource/editresource/'.$value->id)}}'">
                        <td>{{$value->name}}</td>
                        <td>{{$value->type}}</td>
                        <td>{{$value->note}}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>


@endsection
