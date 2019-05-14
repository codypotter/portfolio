<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array|\Illuminate\Http\Request|string $request)
 * @method static where(string $string, $id)
 */
class Tag extends Model
{
    protected $guarded = [];

    public function project() {
        return $this->belongsTo('App\Project', 'projectId');
    }

    public function skill() {
        return $this->belongsTo('App\Skill', 'skillId');
    }
}
