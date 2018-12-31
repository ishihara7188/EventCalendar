@extends('layout')
@section('content')
    <form action="{{ action('EventController@update', $id) }}" method="post">
        {{ csrf_field() }}
        <h1>Update your date</h1>
        <input type="hidden" name="_method" value="update">
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $events->title }}">
        </div>
        <div class="form-group">
            <label>Color</label>
            <input type="color" class="form-control" name="color" placeholder="color" value="{{ $events->color }}">
        </div>
        <div class="form-group">
            <label>Start date</label>
            <input type="date" class="form-control" name="start_date" placeholder="start_date" value="{{ $events->start_date }}">
        </div>
        <div class="form-group">
            <label>End date</label>
            <input type="date" class="form-control" name="end_date" placeholder="end_date" value="{{ $events->end_date }}">
        </div>
        {{ method_field('put') }}
        <button type="submit" name="submit" class="btn btn-primary">Update date</button>
    </form>
@endsection