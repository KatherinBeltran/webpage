<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Coordinador']);

        Permission::create(['name' => 'home', 'description' => 'Ver dashboard'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'users.index', 'description' => 'Ver listado de usuarios'])->syncRoles([$role1]); 
        Permission::create(['name' => 'users.edit', 'description' => 'Asignar un rol'])->syncRoles([$role1]);
        Permission::create(['name' => 'users.destroy', 'description' => 'Eliminar usuario'])->syncRoles([$role1]);

        Permission::create(['name' => 'roles.index', 'description' => 'Ver listado de roles'])->syncRoles([$role1]); 
        Permission::create(['name' => 'roles.create', 'description' => 'Registrar nuevo rol'])->syncRoles([$role1]); 
        Permission::create(['name' => 'roles.show', 'description' => 'Ver rol'])->syncRoles([$role1]);
        Permission::create(['name' => 'roles.edit', 'description' => 'Editar rol'])->syncRoles([$role1]);
        Permission::create(['name' => 'roles.destroy', 'description' => 'Eliminar rol'])->syncRoles([$role1]);

        Permission::create(['name' => 'clientes.index', 'description' => 'Ver listado de clientes'])->syncRoles([$role1]); 
        Permission::create(['name' => 'clientes.create', 'description' => 'Registrar nuevo cliente'])->syncRoles([$role1]); 
        Permission::create(['name' => 'clientes.show', 'description' => 'Ver cliente'])->syncRoles([$role1]);
        Permission::create(['name' => 'clientes.edit', 'description' => 'Editar cliente'])->syncRoles([$role1]);
        Permission::create(['name' => 'clientes.destroy', 'description' => 'Eliminar cliente'])->syncRoles([$role1]);
    }
}