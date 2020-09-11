@extends('layout')
@section('content')
<style>
    .form-group{
        padding: 10px;
    }
</style>
    <form action="" method="POST">
    {{ csrf_field() }}
    <div class="table table-left">
        <div class="table-title">
            <span onclick="window.history.back()" class="fs1 btn-left" aria-hidden="true" data-icon="J"></span>
            school information
                            </div>
        <div class="table-body">
            <div class="form-group">
                <label for="">Name</label>
            <input type="text" name="Nameschool" id="" required>
            </div>
            <div class="form-group">
                <label for="">Proposing date</label>
            <input type="date" name="Prodate" id=""  required>
            </div>
            <div class="form-group">
                <label for="">Staff Name</label>
            <input type="text" name="Staffname" id="" required>
            </div>
            <div class="form-group">
                <label for="">School Type</label>
            <input type="text" name="Schooltype" id=""  required>
            </div>
            <div class="form-group">
                <label for="">District</label>
            <input type="text" name="District" id=""  required>
            </div>
        </div>
    </div>
                <div class="table table-right">
        <div class="table-title">FOLLOW-UP</div>
        <div class="table-body">
            <div class="form-group">
            <label for="">Content</label>
            <textarea name="Followup" id="" cols="30" rows="10" value=""></textarea>
            </div>
        </div>
    </div>
    <button type="submit" class="login-button">Save</button>
</form>


@endsection
