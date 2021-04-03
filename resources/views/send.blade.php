@extends('layouts.app')

@section('content')
    <div class="container" style="justify-content:center">
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">USER Dashboard</div>

                    <h1>Hi!</h1>
                    <table border="2" style="padding:10px; margin:10px; justefy-content:center; text-align:center">
                        <tr>
                            <th>ID</th>

                            <th>user_id</th>


                        </tr>


<h1>--------------------------------------------------------------</h1>
                        @foreach($complaints as $complaint)
                            @if (Auth::user()->role == 'user')
                                <tr>
                                    <th style="padding:10px;">{{$complaint['id']}}</th>
                                    <th>{{$complaint['name']}}</th>
                                    <th>{{$complaint['subject']}}</th>
                                    <th>{{$complaint['complaintsText']}}</th>
                                    <th>{{$complaint['case']}}</th>
                                    <th>{{$complaint['sms']}}</th>
                                    <th>{{$complaint['user_id']}}</th>
                                    <th><select><option>{{$complaint['status']}}</option></select></th>
                                    <td><a href="/Users/{{$complaint->id}}/edit" class='btn btn-warning'>Edit</a>
                                    <!-- <a href="/Users/{{$complaint->id}}/delete" class='btn btn-danger'>Delete</a></td> -->
                                </tr>
                            @endif
                        @endforeach


                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
