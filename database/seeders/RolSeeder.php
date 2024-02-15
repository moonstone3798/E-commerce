<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role; //importo modelo Role
use Spatie\Permission\Models\Permission; //importo modelo permisos

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //creo los roles y los almaceno en variables llamadas admin y usuario 
        $admin = Role::create(['name' => 'vendedor']);
        $usuario = Role::create(['name' => 'comprador']);

        //creo los permisos de las páginas a las que van a poder acceder 
        $permission = Permission::create(['name' => '/productos']);
        $permission = Permission::create(['name' => '/categorias']);
        $permission = Permission::create(['name' => '/stocks']);
    }
}
