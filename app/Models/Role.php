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
        'can_edit_admin' => 'bool',
        'can_view_article' => 'bool',
        'can_edit_article' => 'bool',
        'can_view_contact' => 'bool',
        'can_edit_contact' => 'bool',
        'can_view_office' => 'bool',
        'can_edit_office' => 'bool',
        'can_view_entity' => 'bool',
        'can_edit_entity' => 'bool',
        'can_edit_field' => 'bool',
        'can_view_report' => 'bool',
        'entity_list' => 'array',
    ];

    protected $attributes = [
        'can_edit_admin' => false,
        'can_view_article' => false,
        'can_edit_article' => false,
        'can_view_contact' => false,
        'can_edit_contact' => false,
        'can_view_office' => false,
        'can_edit_office' => false,
        'can_view_entity' => false,
        'can_edit_entity' => false,
        'can_edit_field' => false,
        'can_view_report' => false,
        'entity_list' => [],
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'role_id');
    }
}
