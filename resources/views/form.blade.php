@extends('layouts.app')

@section('content')
<div class="container col-6">
    <hr>
    <h3 style="text-align: center">Sned Your Complaint</h3>
    <hr>
    <form action="/form" method="POST" enctype="multipart/form-data">
        @csrf
        <h4><u>Enter your Complaint:</u></h4>
        <br>
        <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Subject</label>
            <input type="text" name="subject" class="form-control" id="subject" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Write your compaint</label>
            <textarea rows="7" type="text" name="complaintsText" class="form-control" id="phone" required></textarea>
            <div id="emailHelp" class="form-text">We'll never share your complaint with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="case" class="form-label">case</label>
            <strong><select name="case" class="form-control">
                <option value="urgent">Urgent</option>
                <option value="semi-urgent">Semi-urgent</option>
                <option value="non-urgent">Non-urgent</option>
            </select></strong>
        </div>
        <div class="mb-3"><br>
            <label for="sms" class="form-label">Recivec SMS notification</label><br>
            <input type="radio" class="btn-check" name="sms" id="true" value="true" checked autocomplete="off">
            <label class="btn btn-outline-primary col-3" for="true" >True</label>
            <input type="radio" class="btn-check " name="sms" id="false" value="false" autocomplete="off">
            <label class="btn btn-outline-primary col-3" for="false" >False</label>
        </div><hr>
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
