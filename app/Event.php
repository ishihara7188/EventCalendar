<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = ['user_id', 'title', 'color', 'start_date', 'end_date'];

    public function getUserId($user_id)
    {
        $user = Event::where('user_id', $user_id)->get();
        return $user;
    }
}
