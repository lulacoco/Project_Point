<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class UserProfile extends Model
{
    use Notifiable;
    use AuthenticableTrait;

    protected $fillable = [
        'last_name',
        'display_name',
        'age',
        'description',
        'src',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}