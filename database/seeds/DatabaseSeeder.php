<?php
use App\Rol;
use App\Permission;
use App\Category;
use App\Product;
use App\RolPermission;
use Illuminate\Database\Seeder;
//Seeder que hace un llamado a los "seeders"
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(UserTableSeeder::class);
        Rol::insert([
            ['id' => 1, 'description' => 'superAdmin','created_at' => now()],
            ['id' => 2, 'description' => 'Admin','created_at' => now()],
            ['id' => 3, 'description' => 'Usuario','created_at' => now()],
           ]);
        //$this->call(RolTableSeeder::class);
        Permission::insert([
            ['id' => 1, 'description' => 'Publicar, editar y eliminar anuncio','created_at' => now()],
            ['id' => 2, 'description' => 'Agregar, editar y eliminar categoria','created_at' => now()],
            ['id' => 3, 'description' => 'Agregar y eliminar roles','created_at' => now()],
            ['id' => 4, 'description' => 'Comentar, editar y eliminar comentario','created_at' => now()],
            ['id' => 5, 'description' => 'Eliminar usuario','created_at' => now()],
            
           ]);
        //$this->call(PermissionTableSeeder::class);
        $this->call(PaymentTableSeeder::class);
        Category::insert([
            [ 'id' => 1, 'catName' => 'Inmobilaria','created_at' => now()],
            [ 'id' => 2, 'catName' => 'Muebles','created_at' => now()],
            [ 'id' => 3, 'catName' => 'Herramientas','created_at' => now()],
            [ 'id' => 4, 'catName' => 'Articulos','created_at' => now()],
            [ 'id' => 5, 'catName' => 'Espacios','created_at' => now()],
            [ 'id' => 6, 'catName' => 'Vehiculos','created_at' => now()],
           ]);
        //$this->call(CategoryTableSeeder::class);
        RolPermission::insert([
            [ 'id' => 1, 'idRol' => 2, 'idPer' => 1,'created_at' => now()],
            [ 'id' => 2, 'idRol' => 2, 'idPer' => 2,'created_at' => now()],
            [ 'id' => 3, 'idRol' => 2, 'idPer' => 3,'created_at' => now()],
            [ 'id' => 4, 'idRol' => 2, 'idPer' => 4,'created_at' => now()],
            [ 'id' => 5, 'idRol' => 3, 'idPer' => 4,'created_at' => now()],
           ]);
        //$this->call(RolPermissionTableSeeder::class);
        $this->call(UserRolTableSeeder::class);
        Product::insert([
            [ 'id' => 1, 'prodName' => 'Otros','idCat' => 1,'created_at' => now()],
            [ 'id' => 2, 'prodName' => 'Departamento','idCat' => 1,'created_at' => now()],
            [ 'id' => 3, 'prodName' => 'Casa','idCat' => 1,'created_at' => now()],

            [ 'id' => 4, 'prodName' => 'Sillón','idCat' => 2,'created_at' => now()],
            [ 'id' => 5, 'prodName' => 'Silla','idCat' => 2,'created_at' => now()],
            [ 'id' => 6, 'prodName' => 'Escritorio','idCat' => 2,'created_at' => now()],

            [ 'id' => 7, 'prodName' => 'Taladro','idCat' => 3,'created_at' => now()],
            [ 'id' => 8, 'prodName' => 'Martillo','idCat' => 3,'created_at' => now()],
            [ 'id' => 9, 'prodName' => 'Clavo','idCat' => 3,'created_at' => now()],

            [ 'id' => 10, 'prodName' => 'Disfraz','idCat' => 4,'created_at' => now()],
            [ 'id' => 11, 'prodName' => 'Trajes','idCat' => 4,'created_at' => now()],

            [ 'id' => 12, 'prodName' => 'Garaje','idCat' => 5,'created_at' => now()],
            [ 'id' => 13, 'prodName' => 'Patio','idCat' => 5,'created_at' => now()],
            [ 'id' => 14, 'prodName' => 'Oficina','idCat' => 5,'created_at' => now()],
            [ 'id' => 15, 'prodName' => 'Parcela','idCat' => 5,'created_at' => now()],

            [ 'id' => 16, 'prodName' => 'Moto','idCat' => 6,'created_at' => now()],
            [ 'id' => 17, 'prodName' => 'Auto','idCat' => 6,'created_at' => now()],
            [ 'id' => 18, 'prodName' => 'Bicicleta','idCat' => 6,'created_at' => now()],
           ]);
        //$this->call(ProductTableSeeder::class);
        $this->call(AdTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(RatingTableSeeder::class);
        $this->call(RecordTableSeeder::class);
        
    }
}
