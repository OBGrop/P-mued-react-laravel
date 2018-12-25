<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class DataMapping extends Model
{
    use SoftDeletes;

//
//    const TYPE_TEXT = 'text';
//    const TYPE_INTEGER = 'integer';
//    const TYPE_DECIMAL = 'decimal';
//    const TYPE_FLOAT = 'float';
//    const TYPE_GEOLOCATION = 'geolocation';
//    const TYPE_BOOLEAN = 'boolean';
//    const TYPE_ENUM = 'enum';
//    const TYPE_ARRAY = 'array';
//    const TYPE_JSON = 'json';
//    const TYPE_FILE = 'file';
//    const TYPE_IMAGE = 'image';

    protected $fillable = [
        'name', 'attribute'
    ];

//    protected $casts = [
//        'attribute' => 'json'
//    ];
//
//    protected $attributes = [
//        'attribute' => '{}'
//    ];

    protected $dates = ['deleted_at'];

    public function entities()
    {
        return $this->hasMany(Entity::class);
    }

    public function attributes()
    {
        return $this->embedsMany(DataAttribute::class);
    }
}
