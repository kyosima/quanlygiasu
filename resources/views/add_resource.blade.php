@extends('layout')
@section('content')
    <input id="hddmainId" type="hidden" value="">
    <div class="" style="padding: 5px 0px;">

    </div>
    <div class="table">
        <div class="table-title">
            <span onclick="window.history.back()" class="fs1 btn-left" aria-hidden="true" data-icon="J"></span>
            add resource
                            </div>
            <form action="" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" id="" value="" required />
            </div>
            <div class="form-group">

            </div>
            <div class="form-group">
                <label for="">Type</label>
                <select type="text" name="type" id="">
                    <option value="book">Book</option>
                    <option value="media">Media</option>
                    <option value="website">Website</option>
                </select>
            </div>

            <div class="form-group">
                <label for="">Link</label>
                <input type="url" name="link" id="" value="" />
            </div>

            <div class="form-group">
                <label for="">Upload</label>
                <input type="file" name="file" id="" />
            </div>

            <div class="form-group">
                <label for="">Note</label>
                <textarea name="note" id="" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="login-button">Save</button>
        </form>
    </div>



@endsection
