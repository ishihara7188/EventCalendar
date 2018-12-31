@extends('layout')
@section('content')
    <table class="table table-striped table-bordered table-hover">
        <thead class="thead">
            <tr class="warning">
                <th>ID</th>
                <th>TITLE</th>
                <th>COLOR</th>
                <th>START DATE</th>
                <th>END DATE</th>
                <th>UPDATE / EDIT</th>
                <th>DELETE</th>
            </tr>
        </thead>
        @foreach($events as $event)
            <tbody>
                <tr>
                    <td>{{ $event->id }}</td>
                    <td>{{ $event->title }}</td>
                    <td>{{ $event->color }}</td>
                    <td>{{ $event->start_date }}</td>
                    <td>{{ $event->end_date }}</td>
                    <td>
                        <a href="{{ action('EventController@edit', $event['id']) }}" class="btn btn-success">
                            Edit
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{ action('EventController@destroy', $event['id']) }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="delete">
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
@endsection