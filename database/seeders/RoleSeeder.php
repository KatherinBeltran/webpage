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
        $role2 = Role::create(['name' => 'Analista']);

        Permission::create(['name' => 'home', 'description' => 'Ver dashboard'])->syncRoles([$role1,$role2]);
        
        Permission::create(['name' => 'users.index', 'description' => 'Ver listado de usuarios'])->syncRoles([$role1]); 
        Permission::create(['name' => 'users.edit', 'description' => 'Asignar un rol'])->syncRoles([$role1]);
        Permission::create(['name' => 'users.destroy', 'description' => 'Eliminar usuario'])->syncRoles([$role1]);

        Permission::create(['name' => 'roles.index', 'description' => 'Ver listado de roles'])->syncRoles([$role1]); 
        Permission::create(['name' => 'roles.create', 'description' => 'Registrar nuevo rol'])->syncRoles([$role1]); 
        Permission::create(['name' => 'roles.show', 'description' => 'Ver rol'])->syncRoles([$role1]);
        Permission::create(['name' => 'roles.edit', 'description' => 'Editar rol'])->syncRoles([$role1]);
        Permission::create(['name' => 'roles.destroy', 'description' => 'Eliminar rol'])->syncRoles([$role1]);

        Permission::create(['name' => 'cargar.index', 'description' => 'Cargar datos'])->syncRoles([$role1]);

        Permission::create(['name' => 'mat-sectors.index', 'description' => 'Ver listado de matrícula por grados según sector'])->syncRoles([$role1]); 
        Permission::create(['name' => 'mat-sectors.create', 'description' => 'Registrar nueva matrícula por grados según sector'])->syncRoles([$role1]); 
        Permission::create(['name' => 'mat-sectors.show', 'description' => 'Ver matrícula por grados según sector'])->syncRoles([$role1]);
        Permission::create(['name' => 'mat-sectors.edit', 'description' => 'Editar matrícula por grados según sector'])->syncRoles([$role1]);
        Permission::create(['name' => 'mat-sectors.destroy', 'description' => 'Eliminar matrícula por grados según sector'])->syncRoles([$role1]);

        Permission::create(['name' => 'mat-sector-zonas.index', 'description' => 'Ver listado de matrícula por grados según sector zona'])->syncRoles([$role1]); 
        Permission::create(['name' => 'mat-sector-zonas.create', 'description' => 'Registrar nueva matrícula por grados según sector zona'])->syncRoles([$role1]); 
        Permission::create(['name' => 'mat-sector-zonas.show', 'description' => 'Ver matrícula por grados según sector zona'])->syncRoles([$role1]);
        Permission::create(['name' => 'mat-sector-zonas.edit', 'description' => 'Editar matrícula por grados según sector zona'])->syncRoles([$role1]);
        Permission::create(['name' => 'mat-sector-zonas.destroy', 'description' => 'Eliminar matrícula por grados según sector zona'])->syncRoles([$role1]);

        Permission::create(['name' => 'mat-etnicos.index', 'description' => 'Ver listado de matrícula grupos etnicos'])->syncRoles([$role1]); 
        Permission::create(['name' => 'mat-etnicos.create', 'description' => 'Registrar nueva matrícula grupos etnicos'])->syncRoles([$role1]); 
        Permission::create(['name' => 'mat-etnicos.show', 'description' => 'Ver matrícula grupos etnicos'])->syncRoles([$role1]);
        Permission::create(['name' => 'mat-etnicos.edit', 'description' => 'Editar matrícula grupos etnicos'])->syncRoles([$role1]);
        Permission::create(['name' => 'mat-etnicos.destroy', 'description' => 'Eliminar matrícula grupos etnicos'])->syncRoles([$role1]);

        Permission::create(['name' => 'est-venezolanos.index', 'description' => 'Ver listado de matrícula estudiantes venezolanos'])->syncRoles([$role1]); 
        Permission::create(['name' => 'est-venezolanos.create', 'description' => 'Registrar nueva matrícula estudiantes venezolanos'])->syncRoles([$role1]); 
        Permission::create(['name' => 'est-venezolanos.show', 'description' => 'Ver matrícula estudiantes venezolanos'])->syncRoles([$role1]);
        Permission::create(['name' => 'est-venezolanos.edit', 'description' => 'Editar matrícula estudiantes venezolanos'])->syncRoles([$role1]);
        Permission::create(['name' => 'est-venezolanos.destroy', 'description' => 'Eliminar matrícula estudiantes venezolanos'])->syncRoles([$role1]);

        Permission::create(['name' => 'cob-bruta.index', 'description' => 'Ver listado de cobertura bruta'])->syncRoles([$role1]); 
        Permission::create(['name' => 'cob-bruta.create', 'description' => 'Registrar nueva cobertura bruta'])->syncRoles([$role1]); 
        Permission::create(['name' => 'cob-bruta.show', 'description' => 'Ver cobertura bruta'])->syncRoles([$role1]);
        Permission::create(['name' => 'cob-bruta.edit', 'description' => 'Editar cobertura bruta'])->syncRoles([$role1]);
        Permission::create(['name' => 'cob-bruta.destroy', 'description' => 'Eliminar cobertura bruta'])->syncRoles([$role1]);

        Permission::create(['name' => 'cob-neta.index', 'description' => 'Ver listado de cobertura neta'])->syncRoles([$role1]); 
        Permission::create(['name' => 'cob-neta.create', 'description' => 'Registrar nueva cobertura neta'])->syncRoles([$role1]); 
        Permission::create(['name' => 'cob-neta.show', 'description' => 'Ver cobertura neta'])->syncRoles([$role1]);
        Permission::create(['name' => 'cob-neta.edit', 'description' => 'Editar cobertura neta'])->syncRoles([$role1]);
        Permission::create(['name' => 'cob-neta.destroy', 'description' => 'Eliminar cobertura neta'])->syncRoles([$role1]);

        Permission::create(['name' => 'mat-dash.index', 'description' => 'Ver dashboard reporte matrícula'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'cob-dash.index', 'description' => 'Ver dashboard reporte cobertura'])->syncRoles([$role1,$role2]);
    }
}