<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    protected $fillable = [
        'name', 'description', 'start_date', 'end_date',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'workshop_users','workshop_id', 'user_id')->withTimestamps();
    }

}
