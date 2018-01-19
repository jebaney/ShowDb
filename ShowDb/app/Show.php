<?php

namespace ShowDb;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{

    public function setlistItems() {
        return $this->hasMany('ShowDb\SetlistItem');
    }

    public function notes() {
        return $this->hasMany('ShowDb\ShowNote');
    }

    public function images() {
        return $this->hasMany('ShowDb\ShowImage');
    }

    public function users() {
        return $this->belongsToMany('ShowDb\User');
    }

    public function creator() {
        return $this->belongsTo('ShowDb\User', 'user_id');
    }

}
