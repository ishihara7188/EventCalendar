@extends('layout')
@section('content')
    <div class="mx-auto col-md-6 col-md-offset-3">
        <form action="{{ action('EventController@update', $id) }}" method="post">
            {{ csrf_field() }}
            <h1 class="my-3">スケジュール編集</h1>
            <input type="hidden" name="_method" value="update">
            <div class="form-group">
                <label>予定</label>
                <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $events->title }}">
            </div>
            <div class="form-group">
                <label>ラベル</label>
                <input type="color" class="form-control" name="color" placeholder="color" value="{{ $events->color }}" list="data1">
            </div>
            <div class="form-group">
                <label>日時(始)</label>
                <input type="datetime-local" class="form-control" name="start_date" placeholder="start_date" value="{{ $events->start_date }}">
            </div>
            <div class="form-group">
                <label>日時(終)</label>
                <input type="datetime-local" class="form-control" name="end_date" placeholder="end_date" value="{{ $events->end_date }}">
            </div>
            {{ method_field('put') }}
            <button type="submit" name="submit" class="square_btn">更新</button>
        </form>
    </div>
    <datalist id="data1">
        <option value="#9e9e9e"></option>
        <option value="#da6666"></option>
        <option value="#d1cf4f"></option>
        <option value="#1ce7dd"></option>
        <option value="#f79cea"></option>
    </datalist>
@endsection