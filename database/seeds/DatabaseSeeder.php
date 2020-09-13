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
            [ 'id' => 1, 'name' => 'Admin'],
           [ 'id' => 2, 'name' => 'Usuario']
           ]);
        //$this->call(RolTableSeeder::class);
        Permission::insert([
            [ 'id' => 1, 'name' => 'Admin'],
           [ 'id' => 2, 'name' => 'Usuario']
           ]);
        //$this->call(PermissionTableSeeder::class);
        $this->call(PaymentTableSeeder::class);
        Category::insert([
            [ 'id' => 1, 'catName' => 'Inmobilaria'],
           [ 'id' => 2, 'catName' => 'Muebles'],
           [ 'id' => 3, 'catName' => 'Herramientas'],
           [ 'id' => 4, 'catName' => 'Articulos'],
           [ 'id' => 5, 'catName' => 'Espacios'],
           [ 'id' => 6, 'catName' => 'Vehiculos'],
           ]);
        //$this->call(CategoryTableSeeder::class);
        RolPermission::insert([
            [ 'id' => 1, 'prodName' => 'Admin'],
           [ 'id' => 2, 'prodName' => 'Usuario']
           ]);
        $this->call(RolPermissionTableSeeder::class);
        $this->call(UserRolTableSeeder::class);
        Product::insert([
            [ 'id' => 1, 'prodName' => 'Otros'],
            [ 'id' => 2, 'prodName' => 'Departamento'],
           [ 'id' => 3, 'prodName' => 'Casa'],

           [ 'id' => 4, 'prodName' => 'Sillón'],
           [ 'id' => 5, 'prodName' => 'Silla'],
           [ 'id' => 6, 'prodName' => 'Escritorio'],

           [ 'id' => 7, 'prodName' => 'Taladro'],
           [ 'id' => 8, 'prodName' => 'Martillo'],
           [ 'id' => 9, 'prodName' => 'Clavo'],

           [ 'id' => 10, 'prodName' => 'Disfraz'],
           [ 'id' => 11, 'prodName' => 'Trajes'],

           [ 'id' => 12, 'prodName' => 'Garaje'],
           [ 'id' => 13, 'prodName' => 'Patio'],
           [ 'id' => 14, 'prodName' => 'Oficina'],
           [ 'id' => 15, 'prodName' => 'Parcela'],

           [ 'id' => 16, 'prodName' => 'Moto'],
           [ 'id' => 17, 'prodName' => 'Auto'],
           [ 'id' => 18, 'prodName' => 'Bicicleta'],
           ]);
        //$this->call(ProductTableSeeder::class);
        $this->call(AdTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(RatingTableSeeder::class);
        $this->call(RecordTableSeeder::class);
        
    }
}
