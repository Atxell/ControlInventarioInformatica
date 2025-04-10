<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'permission_role');
    }

    public function assignPermission($permission)
    {
        if (is_string($permission)) {
            $permission = Permission::where('name', $permission)->firstOrFail();
        }
        return $this->permissions()->syncWithoutDetaching($permission);
    }

    public function syncPermissions($permissions)
    {
        if (is_array($permissions)) {
            return $this->permissions()->sync($permissions);
        }
        return $this->permissions()->sync([$permissions]);
    }

    public function revokePermission($permission)
    {
        if (is_string($permission)) {
            $permission = Permission::where('name', $permission)->firstOrFail();
        }
        return $this->permissions()->detach($permission);
    }

    public function hasPermission($permission)
    {
        if (is_string($permission)) {
            return $this->permissions->contains('name', $permission);
        }
        return $this->permissions->contains('id', $permission->id);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'usuario_roles', 'rol_id', 'usuario_id');
    }
}