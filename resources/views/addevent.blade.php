@extends('layout')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading bg-success text-white mb-5">
                    Add Event
                </div>
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
                    <h1>Add Date</h1>
                    <form method="post" action="{{action('EventController@store')}}">
                        {{ csrf_field() }}
                        <label for="">Event Name</label>
                            <input type="text" class="form-control" name="title" placeolder="Name" value="{{ old('title') }}">
                        <label for="">Event Color</label>
                            <input type="color" class="form-control" name="color" placeolder="Color" value="{{ old('color') }}">
                        <label for="">Start Date</label>
                            <input type="datetime-local" class="form-control date" name="start_date" placeolder="Start Date" value="{{ old('start_date') }}">
                        <label for="">End Date</label>
                            <input type="datetime-local" class="form-control date" name="end_date" placeolder="End Date"  value="{{ old('end_date') }}">
                        <input type="submit" name="submit" class="btn btn-primary" value="Add Event">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection