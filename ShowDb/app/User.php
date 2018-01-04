<?php

namespace ShowDb;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    use Auditable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'admin', 'avatar', 'fb_id',
    ];

    protected $dates = ['deleted_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin() {
        return $this->admin;
    }

    public function shows() {
        return $this->belongsToMany('ShowDb\Show');
    }

    public function badges() {
        return $this->belongsToMany('ShowDb\Badge');
    }
}
