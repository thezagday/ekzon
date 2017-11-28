<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(InfoTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(CatalogsTableSeeder::class);
        $this->call(PageMaterialsTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(CompanyMaterialsTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(ProducedsTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(CatalogMaterialsTableSeeder::class);
        $this->call(MainMaterialsSeeder::class);
        $this->call(NewsSlidersTableSeeder::class);
    }
}
