@extends('layout')
@section('content')
    <div class="mx-auto col-md-8 col-md-offset-2">
        <div class="mt-4 row">
            <a href="/addevent" class="mr-3 square_btn">予定追加</a>
            <a href="{{ url('/displayevent', $events) }}" class="mr-3 square_btn">予定編集</a>
        </div>
        <br>
        <div class="panel panel-default mb-5">
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
@endsection