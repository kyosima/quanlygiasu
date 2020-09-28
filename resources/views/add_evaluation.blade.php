
@extends('layout')
@section('content')

<div>
    <div class="table-title">
        <span onclick="window.history.back();" class="fs1 btn-left" aria-hidden="true" data-icon="J"></span>
        Evaluation Form
        <span onclick="insert()" class="fs1 btn-right" aria-hidden="true" data-icon=""></span>
    </div>

    <div class="table-body">
        <form action="" method="POST">
            <div class="form-group-user-teacher-school">
                <div class="form-group-child-left">
                    <label for="">User</label>
                    <input readonly type="text" class="form-control" name="username" id="" value="{{$username}}" >
                </div>
                <div class="form-group-child-right">
                    <label for="">Date</label>
                    <input type="text" class="form-control" name="tag" id="" value="" >
                </div>
            </div>
            <div class="form-group-user-teacher-school">
                <div class="form-group-child-left">
                    <label for="">Teacher</label>
                    <input type="text" class="form-control" name="tag" id="" value="" >
                </div>
                <div class="form-group-child-right">
                    <label for="">Time</label>
                    <input type="text" class="form-control" name="tag" id="" value="" >
                </div>
            </div>
            <div class="form-group-user-teacher-school">
                <div class="form-group-child-left">
                    <label for="">School</label>
                    <input type="text" class="form-control" name="tag" id="" value="" >
                </div>
                <div class="form-group-child-right">
                    <label for="">Class</label>
                    <input type="text" class="form-control" name="tag" id="" value="" >
                </div>
            </div>
            <div class="form-group-react">
                <div class="form-group-child">
                    <label for="">Attire</label>
                    <input type="text" class="form-control" name="tag" id="" value="" >
                </div>
                <div class="form-group-child">
                    <label for="">Description</label>
                    <input type="text" class="form-control" name="tag" id="" value="" >
                </div>
            </div>
            <div class="form-group-react">
                <div class="form-group-child">
                    <label for="">Punctuality</label>
                    <input type="text" class="form-control" name="tag" id="" value="" >
                </div>
                <div class="form-group-child">
                    <label for="">Assigned lessons</label>
                    <input type="text" class="form-control" name="tag" id="" value="" >
                </div>
            </div>
            <div class="form-group-react">
                <div class="form-group-child">
                    <label for="">Teaching preparation</label>
                    <input type="text" class="form-control" name="tag" id="" value="" >
                </div>
                <div class="form-group-child">
                    <label for="">Friendliness</label>
                    <input type="text" class="form-control" name="tag" id="" value="" >
                </div>
            </div>
            <div class="form-group-react">
                <div class="form-group-child">
                    <label for="">Applying fun activities</label>
                    <input type="text" class="form-control" name="tag" id="" value="" >
                </div>
                <div class="form-group-child">
                    <label for="">Classroom atmosphere</label>
                    <input type="text" class="form-control" name="tag" id="" value="" >
                </div>
            </div>
            <button type="submit" class="login-button">Save</button>
        </form>
    </div>
</div>


@endsection
