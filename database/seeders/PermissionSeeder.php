<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Permisos estáticos del sistema
        $permissions = [
            [
                'name' => 'admin',
                'display_name' => 'Administración del sistema',
                'description' => 'Acceso completo a todas las funcionalidades del sistema'
            ],
            [
                'name' => 'cat_roles',
                'display_name' => 'Catálogo de Roles',
                'description' => 'Permite gestionar los roles del sistema'
            ],
            [
                'name' => 'opciones_sist',
                'display_name' => 'Opciones del Sistema',
                'description' => 'Permite configurar opciones generales del sistema'
            ],
            [
                'name' => 'cat_usuarios',
                'display_name' => 'Catálogo de Usuarios',
                'description' => 'Permite gestionar los usuarios del sistema'
            ],
            [
                'name' => 'catalogos',
                'display_name' => 'Catálogos Generales',
                'description' => 'Acceso a los catálogos generales del sistema'
            ],
            [
                'name' => 'cat_areas',
                'display_name' => 'Catálogo de Áreas',
                'description' => 'Permite gestionar las áreas/departamentos'
            ],
            [
                'name' => 'perfil',
                'display_name' => 'Perfil de Usuario',
                'description' => 'Permite editar el perfil de usuario propio'
            ],
            [
                'name' => 'inventario',
                'display_name' => 'Inventario',
                'description' => 'Acceso al módulo de inventario'
            ]
        ];

        // Verificar y crear permisos que no existan
        foreach ($permissions as $permissionData) {
            Permission::firstOrCreate(
                ['name' => $permissionData['name']],
                $permissionData
            );
        }

        $this->command->info('Permisos base creados exitosamente!');
    }
}