@extends('layouts.app')

@section('content')
<div class="container col-6">
    <hr>
    <h3 style="text-align: center">Sned Your Complaint</h3>
    <hr>
    <form action="/update" method="POST" enctype="multipart/form-data">
        @csrf
        <h4><u>Edit User Complaint Status:</u></h4><br>
        <input type="hidden" name="id" value="{{$complaintEdit['id']}}">
        <div class="mb-3">
            <label for="name" class="form-label">User Name is : <span style="color: red">{{$complaintEdit['name']}}</span></label>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">User Subject : <span style="color: red">{{$complaintEdit['subject']}}</span></label>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">User Complaint content : <span style="color: red">{{$complaintEdit['complaintsText']}}</span></label>
        </div><hr>
        <div class="mb-3">
            <label for="case" class="form-label">Change User complaint Status:</label>
            <strong><select name="status" class="form-control">
                <option value="pending">Pending</option>
                <option value="resolved">Resolved</option>
                <option value="Dismissed">Dismissed</option>
            </select></strong>
        </div>
        <div class="mb-3"><br>
            <input type="hidden" class="btn-check" name="sms" id="true" value="{{$complaintEdit['sms']}}" checked autocomplete="off">

        <div class="mb-3">
            <input type="hidden" name="user_id" class="form-control" id="user_id" value="{{Auth::user()->id}}">
        </div>
        <div class="d-grid gap-2">
            <button type="submit" id="#addform" class="btn btn-success btn-block" style="margin-bottom: 10%">
                Submit
            </button>
        </div>
    </form>
</div>

@endsection
