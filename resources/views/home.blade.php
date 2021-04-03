@extends('layouts.app')

@section('content')
    <div class="container" style="justify-content:center">
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>Add & View your Complaint</strong></div>
                    <center><div style="justify-content: center">
                            @if (Auth::user()->role == 'user')
                            <h5>Add New complaint from here</h5>
                            <button class="btn btn-secondary btn-lg" style=""><a href="/form">Add New Complain</a></button>
                            @endif
                                    <table border="2" style="margin: 5%">
                                        <tr>
                                            <th style="padding: 20px; text-align: center">ID</th>
                                            <th style="padding: 20px; text-align: center">Name</th>
                                            <th style="padding: 20px; text-align: center">Subject</th>
                                            <th style="padding: 20px; text-align: center">Complaint Text</th>
                                            <th style="padding: 20px; text-align: center">Case</th>
                                            <th style="padding: 20px; text-align: center">SMS</th>
{{--                                            <th style="padding: 20px; text-align: center">user_id</th>--}}
                                            <th style="padding: 20px; text-align: center">Status</th>
                                            @if (Auth::user()->role == 'admin')
                                            <th style="padding: 20px; text-align: center">Change Status</th>
                                            @endif
                                        </tr>

                                        @foreach($complaints as $complaint)
                                            <tr>
                                                <th style="padding: 20px; text-align: center">{{$complaint['id']}}</th>
                                                <th style="padding: 20px; text-align: center">{{$complaint['name']}}</th>
                                                <th style="padding: 20px; text-align: center">{{$complaint['subject']}}</th>
                                                <th style="padding: 20px; text-align: center">{{$complaint['complaintsText']}}</th>
                                                <th style="padding: 20px; text-align: center">{{$complaint['case']}}</th>
                                                <th style="padding: 20px; text-align: center">{{$complaint['sms']}}</th>
{{--                                                <th style="padding: 20px; text-align: center">{{$complaint['user_id']}}</th>--}}
                                                <th style="padding: 20px; text-align: center ; color: #008080"><u>{{$complaint['status']}}</u></th>
                                                @if (Auth::user()->role == 'admin')
                                                <td style="text-align: center"><a href="/edit/{{$complaint->id}}" class='btn btn-warning'>Change Status</a>
                                                @endif
                                                <!-- <a href="/Users/{{$complaint->id}}/delete" class='btn btn-danger'>Delete</a></td> -->
                                            </tr>
                                        @endforeach

                                    </table>


                    </div></center><br>
                </div>
            </div>
        </div>
    </div>
@endsection
