<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\Permission;
use App\Models\Role;

class CatalogosSeeder extends Seeder
{
    public function run()
    {
        // Verificar y crear tipos de equipo primero
        /*if (DB::table('cattipodeequipo')->count() == 0) {
            DB::table('cattipodeequipo')->insert([
                ['name' => 'Laptop', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Desktop', 'created_at' => now(), 'updated_at' => now()],
            ]);
        }*/
    
        // Insertar marcas si no existen
        /*if (DB::table('catmarcas')->count() == 0) {
            DB::table('catmarcas')->insert([
                [
                    'nombre' => 'Dell',
                    'tipo_equipo_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'nombre' => 'HP',
                    'tipo_equipo_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]);
        }*/
        
        /*
        $permisos = [
            ['name' => 'view_roles', 'display_name' => 'Ver Roles', 'description' => 'Ver listado de roles'],
            ['name' => 'create_roles', 'display_name' => 'Crear Roles', 'description' => 'Crear nuevos roles'],
            ['name' => 'edit_roles', 'display_name' => 'Editar Roles', 'description' => 'Editar roles existentes'],
            ['name' => 'delete_roles', 'display_name' => 'Eliminar Roles', 'description' => 'Eliminar roles'],
            ['name' => 'create_usuarios', 'display_name' => 'Alta Users', 'description' => 'Crear Usuarios'],
            ['name' => 'edit_usuaios', 'display_name' => 'Edit Users', 'description' => 'Modificar Usuarios'],
            ['name' => 'delete_usuarios', 'display_name' => 'Eliminar', 'description' => 'Eliminar Usuarios']
            ,
            // Agrega más permisos según necesites
        ];
        
        foreach ($permisos as $permiso) {
            Permission::firstOrCreate(
                ['name' => $permiso['name']],
                $permiso
            );
        }*/

        // 2. Crear roles básicos
        $adminRole = Role::firstOrCreate(
            ['name' => 'admin'],
            ['description' => 'Administrador del sistema']
        );
        $userRole = Role::firstOrCreate(
            ['name' => 'user'],
            ['description' => 'Usuario regular']
        );

        // 3. Asignar todos los permisos al rol admin
        $adminRole->permissions()->sync(Permission::pluck('id')->toArray());

        // 4. Asignar algunos permisos básicos al rol user
        $userRole->permissions()->sync(
            Permission::whereIn('name', ['view_roles'])->pluck('id')->toArray()
        );
        $this->command->info('Catalogos creados exitosamente!');


    }
}