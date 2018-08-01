<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use Notifiable;

    protected $fillable = [
        'first_name', 'last_name', 'e_mail', 'age', 'password',
    ];

    protected $guarded = [
        'password',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_roles','user_id', 'role_id')->withTimestamps();
    }

    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_users','user_id', 'event_id')->withTimestamps();
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'user_groups','user_id', 'group_id')->withTimestamps();
    }

    public function hasAnyRole($roles)
    {
        if (is_array($roles))
        {
            foreach ($roles as $role)
            {
                if ($this->hasRole($role))
                    return true;
            }
        }
        else
        {
            if ($this->hasRole($roles))
                return true;
        }
        return false;
    }


    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()) // where = SELECT * FROM userRole u WHERE u.name = u.id_user
        {
            return true;
        }
        return false;
    }

    public $timestamps = false;
}