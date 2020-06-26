<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Department::class, 4)->create()->each(function ($dept) {
            $dept->options()->save(factory(App\Option::class)->make());
        });

        factory(App\Semester::class, 4)->create();

        factory(App\User::class, 105)->create()->each(function ($user) {
            if ($user->user_role === Role::where('role_name', 'etudiant')->pluck('role_id')->first()) {
                $user->student()->save(factory(App\Student::class)->make());
            }
            // $std->option->attach(factory(App\Semester::class));
        });

        // News Seeder
        factory(App\News::class, 25)->create();
    }
}
