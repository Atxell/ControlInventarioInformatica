<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function roles()
    {
        return $this->belongsToMany(
            Role::class,
            'usuario_roles',
            'usuario_id',
            'role_id'
        );
    }

    public function permissions()
    {
        return $this->roles->flatMap->permissions->unique('id');
    }

    /*    public function assignPermission($permission)
    {
        if (is_string($permission)) {
            $permission = Permission::where('name', $permission)->firstOrFail();
        }
        
        $this->permissions()->syncWithoutDetaching($permission);
    }*/

    /*public function revokePermission($permission)
    {
        if (is_string($permission)) {
            $permission = Permission::where('name', $permission)->firstOrFail();
        }
        
        $this->permissions()->detach($permission);
    }*/

    public function hasPermission($permission)
    {
        // Si el permiso es un string (nombre)
        if (is_string($permission)) {
            return $this->roles->flatMap(function($role) {
                return $role->permissions;
            })->contains('name', $permission);
        }
        
        // Si es una instancia de Permission
        if ($permission instanceof Permission) {
            return $this->roles->flatMap(function($role) {
                return $role->permissions;
            })->contains('id', $permission->id);
        }
        
        return false;
    }

    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('name', $role);
        }
        
        return $this->roles->contains('id', $role->id);
    }
}
