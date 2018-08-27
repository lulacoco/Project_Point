<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;


class User extends Model implements Authenticatable
{
    use Notifiable;
    use AuthenticableTrait;

    protected $fillable = [
        'email',
        'password',
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

    public function workshops()
    {
        return $this->belongsToMany(Workshop::class, 'workshop_users','user_id', 'workshop_id')->withTimestamps();
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'user_groups','user_id', 'group_id')->withTimestamps();
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
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