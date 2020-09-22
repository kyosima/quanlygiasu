
@extends('layout')
@section('content')

<div>
    <div class="table-title">
        schooltype
    </div>
    <script>
        $(document).ready(function() {
            var table = $('#schooltype-table').DataTable({

            });
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
        <table id="schooltype-table" class="table table-striped table-bordered table-striped" style="width:100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th class="th-fill">Name</th>
                    <th class="th-fill">Action</th>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <form action="{{URL::to('schooltype/addschooltype/')}}" method="POST">
                        {{ csrf_field() }}
                        <td></td>
                        <td><input class="form-control" name="name" id="" /></td>
                        <td><button type="submit" class="btn btn-success">Create</button></td>
                    </form>
                </tr>
                @foreach ($schooltype as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->name}}</td>
                        <td>
                            <a class="btn btn-danger" href="{{URL::to('schooltype/deleteschooltype/'.$value->id)}}" >Delete</a>
                            <a class="btn btn-primary" id="{{$value->id}}" data-toggle="modal" onclick="update(this.id)" data-target="#updateModal">Update</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <div class="modal fade" id="updateModal" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Update district</h4>
                </div>
                <form name="updateschooltype" action="{{URL::to('schooltype/updateschooltype')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-body">
                            <p>Enter new schooltype's name:</p>
                            <div style="display: table; width: 100%;">
                                <div style="display: table-cell; width: 10%;">
                                    <input readonly class="form-control" id="idupdate" name="id" value=""/>
                                </div>
                                <div style="display: table-cell; width: 90%;">
                                    <input class="form-control" id="nameupdate" name="name" value=""/>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
              </div>
            </div>
        </div>
        <script>
            function update(id){
                document.getElementById("idupdate").value = id;
            }
        </script>

    </div>
</div>


@endsection
