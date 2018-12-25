<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Entity extends Model
{
    use SoftDeletes;

    protected $attributes = [
        'data_mapping_id' => null,
    ];

    protected $guarded = [];

    protected $dates = ['deleted_at'];

    public function data_mapping()
    {
        return $this->belongsTo(DataMapping::class, 'data_mapping_id');
    }

    public function setAttribute($key, $value)
    {
        $can_set_property = false;
        $parsed_value = $value;

        if ($data_mapping = $this->data_mapping()->first()) {
            $attribute = $data_mapping->attributes()->where('name', $key)->first();
            if ($attribute) {
                switch ($attribute->type) {
                    case 'number':
                        $can_set_property = is_numeric($value);
                        $parsed_value = floatval($value);
                        break;
                    case 'integer':
                        $can_set_property = is_integer($value);
                        $parsed_value = intval($value);
                        break;
                    case 'text':
                    default:
                        $can_set_property = true;
                        $parsed_value = "{$parsed_value}";
                }
            }
        }

        if ($can_set_property) {
            return parent::setAttribute($key, $parsed_value);
        }

        return $this;
    }

    public function getAttribute($key, $default = null)
    {
        if (array_key_exists($key, $this->attributes)) {
            return parent::getAttribute($key);
        }

        return $default;
    }

    public function __unset($key)
    {
        parent::__unset($key);
    }
}
