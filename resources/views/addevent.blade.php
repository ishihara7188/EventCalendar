@extends('layout')
@section('content')
    <div class="mx-auto col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-body">
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h1 class="my-3">スケジュール追加</h1>
                <form method="post" action="{{action('EventController@store')}}">
                    {{ csrf_field() }}
                        <input type="hidden" class="form-control" name="user_id" value="{{ $user_id }}">
                    <label>予定</label>
                        <input type="text" class="form-control" name="title" placeolder="Name" value="{{ old('title') }}">
                    <label>ラベル</label>
                        <input type="color" class="form-control" name="color"  list="data1" placeolder="Color" value="{{ old('color', '#da6666') }}">
                    <label>日時(始)</label>
                        <input type="datetime-local" class="form-control date" name="start_date" placeolder="Start Date" value="{{ old('start_date') }}">
                    <label>日時(終)</label>
                        <input type="datetime-local" class="form-control date" name="end_date" placeolder="End Date"  value="{{ old('end_date') }}">
                    <div class="d-flex mt-3">
                        <input type="submit" name="submit" class="square_btn mr-4" value="追加">
                        <a href="{{ url('/events') }}" class="square_btn">戻る</a>
                    </div>
                </form>
                
            </div>
        </div>
        <datalist id="data1">
            <option value="#9e9e9e"></option>
            <option value="#da6666"></option>
            <option value="#d1cf4f"></option>
            <option value="#1ce7dd"></option>
            <option value="#f79cea"></option>
        </datalist>
    <!-- </div> -->
@endsection