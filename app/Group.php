<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'name','description',
    ];

    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_groups','group_id', 'event_id')->withTimestamps();
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_groups','group_id', 'user_id')->withTimestamps();
    }

    //public $timestamps = false;
}