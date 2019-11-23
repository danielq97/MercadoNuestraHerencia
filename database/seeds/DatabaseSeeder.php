<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriaSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(UnidadmedidaSeeder::class);
        $this->call(UserAdminSeeder::class);
    }
}
