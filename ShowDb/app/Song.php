<?php

namespace ShowDb;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    public function creator() {
        return $this->belongsTo('ShowDb\User');
    }

    public function setlistItems() {
        return $this->hasMany('ShowDb\SetlistItem');
    }
}
