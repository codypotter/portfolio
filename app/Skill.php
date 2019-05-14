<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $guarded = [];

    public function tags() {
        return $this->hasMany('App\Tag', 'skillId');
    }
}
