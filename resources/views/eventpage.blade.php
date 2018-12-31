@extends('layout')
@section('content')
<h2>Event Calendar</h2>
<div class="row">
    <a href="/addevent" class="btn btn-success">Add Event</a>
    <a href="/displayevent" class="btn btn-success">Edit Event</a>
</div>
<br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading bg-primary text-white mb-5">
                    Event Calendar
                </div>
                <div class="panel-body">
                    <!-- エラー/成功メッセージ -->
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @elseif(\Session::has('success'))
                        <div class="alert alert-success">
                            <p>{{ \Session::get('success') }}</p>
                        </div>
                    @endif
                    {!! $calendar->calendar() !!}
                    {!! $calendar->script() !!}
                </div>
            </div>
        </div>
    </div>
@endsection