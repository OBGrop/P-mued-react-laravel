<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Entity extends Model
{
    use SoftDeletes;

    protected $connection = 'mongodb';

    protected $guarded = [];

    protected $dates = ['deleted_at'];

    public function owner() {
        return $this->belongsTo('Info');
    }
}
