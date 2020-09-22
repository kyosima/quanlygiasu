@extends('layout')
@section('content')
    <input id="hddmainId" type="hidden" value="">
    <div class="" style="padding: 5px 0px;">

    </div>
    <div class="table">
        <div class="table-title">
            <span onclick="window.history.back()" class="fs1 btn-left" aria-hidden="true" data-icon="J"></span>
                edit teacher
                <a href="{{URL::to('resource/deleteresource/'.$resource->id)}}"><span class="fs1 btn-right" aria-hidden="true" data-icon=""></span></a>

            </div>

            <form action="" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">Name</label>
            <input  class="form-control" type="text" name="name" id="" value="{{$resource->name}}"/>
            </div>
            <div class="form-group">

            </div>
            <div class="form-group">
                <label for="">Type</label>
            <select  class="form-control" style="text-transform: capitalize"  name="type" id="" >
                <option value="{{$resource->type}}">{{$resource->type}}</option>
                <option value="book">Book</option>
                <option value="media">Media</option>
                <option value="website">Website</option>
            </select>
            </div>
            <div class="form-group">
                <label for="">Link</label>
            <input  class="form-control" type="url" name="link" id="" value="{{$resource->link}}"/>
            </div>
            <div class="form-group">
                <label for="">Upload</label>
            <input class="form-control" type="file" name="upload" id="" />
            </div>
            <div class="form-group">
                <label for="">Note</label>
                <textarea name="note" id="" cols="30" rows="10" >{{$resource->note}}</textarea>
            </div>
            <button type="submit" class="login-button">Save</button>
        </form>
    </div>



@endsection
