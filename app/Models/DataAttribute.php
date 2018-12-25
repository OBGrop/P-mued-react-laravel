<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class DataAttribute extends Model
{
    const TYPE_TEXT = 'text';
    const TYPE_HTML = 'html';
    const TYPE_NUMBER = 'number';
    const TYPE_INTEGER = 'integer';
    const TYPE_IMAGE = 'image';
    const TYPE_FILE = 'file';
    const TYPE_BOOLEAN = 'boolean';
    const TYPE_SELECT = 'select';
    const TYPE_GEOLOCATION = 'geolocation';
    const TYPE_DATETIME = 'datetime';
    const TYPE_DATE = 'date';
    const TYPE_TIME = 'time';
    const TYPE_TIMETABLE = 'timetable';
    const TYPE_RANGE = 'range';
    const TYPE_PASSWORD = 'password';
    const TYPE_EMAIL = 'email';
    const TYPE_URL = 'url';
    const TYPE_ARRAY = 'array';

    public $timestamps = false;

    protected $fillable = [
        'name', 'sequence', 'tag', 'type', 'condition', 'is_required', 'display_on_call_center', 'display_on_internal', 'display_on_website',
    ];

    protected $casts = [
        'sequence' => 'int',
        'condition' => 'json',
        'is_required' => 'boolean',
        'display_on_call_center' => 'boolean',
        'display_on_internal' => 'boolean',
        'display_on_website' => 'boolean',
    ];

    protected $attributes = [
        'sequence' => 0,
        'type' => self::TYPE_TEXT,
        'condition' => '{}',
        'is_required' => false,
        'display_on_call_center' => false,
        'display_on_internal' => false,
        'display_on_website' => false,
    ];
}
