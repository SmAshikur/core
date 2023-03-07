<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssessmentTest extends Model
{
    protected $fillable = ['cat_id','pattern','question'];
    public function category()
    {
        return $this->belongsTo('App\AssessmentCategory','cat_id');
    }
}
