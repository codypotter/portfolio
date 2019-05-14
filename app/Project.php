<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array|\Illuminate\Http\Request|string $request)
 */
class Project extends Model
{
    protected $guarded = [];

    public function tags() {
        return $this->hasMany('App\Tag', 'projectId');
    }

    public function getSkills() {
        $associatedSkills = new \Illuminate\Database\Eloquent\Collection;
        foreach ($this->tags as $associatedTag) {
            $associatedSkills->push($associatedTag->skill);
        }
        return $associatedSkills;
    }
}


