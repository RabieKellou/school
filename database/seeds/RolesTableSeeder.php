<?php

use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Role::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Role::create([
            'role_name' => 'etudiant',
        ]);
        Role::create([
            'role_name' => 'enseignant',
        ]);
        Role::create([
            'role_name' => 'admin',
        ]);
    }
}
