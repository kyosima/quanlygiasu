@extends('layout')
@section('content')
    <input id="hddmainId" type="hidden" value="">
    <div class="" style="padding: 5px 0px;">

    </div>
    <div class="table">
        <div class="table-title">
            <span onclick="window.history.back()" class="fs1 btn-left" aria-hidden="true" data-icon="J"></span>
            course information
            <span onclick="del()" class="fs1 btn-right" aria-hidden="true" data-icon=""></span>
                            </div>
            <form action="" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">Name Course</label>
            <input type="text" name="Name" id="" value="{{$result->course}}">
            </div>
            <div class="form-group">
                <label for="">Resource reference</label>
                <select name="Resource" id="">
                <option value="{{$result->resource}}"> {{$result->resource}} </option>
                    <option value="Family and friends 1">Family and friends 1</option>
                    <option value="Family and friends 2">Family and friends 2</option>
                    <option value="Family and friends 3">Family and friends 3</option>
                    <option value="Family and friends 4">Family and friends 4</option>
                    <option value="Family and friends 5">Family and friends 5</option>
                    <option value="Tieng Anh 6 (English 6)">Tieng Anh 6 (English 6)</option>
                    <option value="Tieng Anh 9 (English 9)">Tieng Anh 9 (English 9)</option>
                    <option value="Tieng Anh 6 (Pearson)">Tieng Anh 6 (Pearson)</option>
                    <option value="Tieng Anh 9 (Pearson)">Tieng Anh 9 (Pearson)</option>
                    <option value="Family and friends 1">Family and friends 1</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Number of Unit</label>
            <input type="text" name="Unit" id="" value="{{$result->unit}}">
            </div>
            <div class="form-group">
                <label for="">Duration</label>
            <input type="text" name="Duration" id="" value="{{$result->duration}}">
            </div>
            <button type="submit" class="login-button">Save</button>
        </form>
    </div>



@endsection
