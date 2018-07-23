<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //users
        Permission::create([
            'name'          => 'Navegar usuarios',
            'slug'          => 'users.index',
            'description'   => 'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de usuarios',
            'slug'          => 'users.show',
            'description'   => 'Ver en detalle cada usuario',
        ]);
        Permission::create([
            'name'          => 'Edicion de usuarios',
            'slug'          => 'users.edit',
            'description'   => 'Editar todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar usuarios',
            'slug'          => 'users.destroy',
            'description'   => 'Elimina los usuarios del sistema',
        ]);

        //Roles
        
        Permission::create([
            'name'          => 'Navegar roles',
            'slug'          => 'roles.index',
            'description'   => 'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de rol',
            'slug'          => 'roles.show',
            'description'   => 'Ver en detalle cada usuario',
        ]);
        Permission::create([
            'name'          => 'Creacion de roles',
            'slug'          => 'roles.create',
            'description'   => 'Editar todos los rol del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion de roles',
            'slug'          => 'roles.edit',
            'description'   => 'Editar todos los rol del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar roles',
            'slug'          => 'roles.destroy',
            'description'   => 'Elimina los rol del sistema',
        ]);
        
        //Products
        
        Permission::create([
            'name'          => 'Navegar productos',
            'slug'          => 'products.index',
            'description'   => 'Lista y navega todos los productos del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de productos',
            'slug'          => 'products.show',
            'description'   => 'Ver en detalle cada usuario',
        ]);
        Permission::create([
            'name'          => 'Creacion de productos',
            'slug'          => 'products.create',
            'description'   => 'Editar todos los productos del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion de productos',
            'slug'          => 'products.edit',
            'description'   => 'Editar todos los productos del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar productos',
            'slug'          => 'products.destroy',
            'description'   => 'Elimina los productos del sistema',
        ]);
    }
}
