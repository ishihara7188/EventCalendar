@extends('layout')
@section('content')
    <a href="{{ url('/events') }}" class="square_btn my-2">戻る</a>
    <table class="table table-bordered table-hover">
        <thead class="thead">
            <tr class="warning">
                <th>予定</th>
                <th>日時(始)</th>
                <th>日時(終)</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        @foreach($events as $event)
            <tbody>
                <tr>
                    <td>{{ $event->title }}</td>
                    <td>{{ $event->start_date }}</td>
                    <td>{{ $event->end_date }}</td>
                    <td>
                        <a href="{{ action('EventController@edit', $event['id']) }}" class="edit_btn">
                            編集
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{ action('EventController@destroy', $event['id']) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="delete">
                            <button type="submit" class="edit_btn">削除</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
@endsection