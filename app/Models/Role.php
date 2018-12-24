<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

/**
 * App\Models\Role
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Role extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'can_admin', 'can_article','can_contact','can_office',
        'can_field', 'can_report', 'can_entity', 'entity_list',
    ];

    protected $casts = [
        'can_admin' => 'bool',
        'can_contact' => 'bool',
        'can_office' => 'bool',
        'can_article' => 'bool',
        'can_report' => 'bool',
        'can_field' => 'bool',
        'can_entity' => 'bool',
        'entity_list' => 'array',
    ];

    protected $attributes = [
        'can_admin' => false,
        'can_contact' => false,
        'can_office' => false,
        'can_article' => false,
        'can_report' => false,
        'can_field' => false,
        'can_entity' => false,
        'entity_list' => [],
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'role_id');
    }
}
