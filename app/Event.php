<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name', 'description',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'event_users','event_id', 'user_id')->withTimestamps();
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'event_groups','event_id', 'group_id')->withTimestamps();
    }
}