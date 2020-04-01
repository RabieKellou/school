<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Department;
use App\Option;
use App\Semester;
use App\Student;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        // 'cin'=> $faker->name,
        // 'name' => $faker->name,
        // 'email' => $faker->unique()->safeEmail,
        // 'email_verified_at' => now(),
        // 'name' => $faker->enum('Student','Teacher','Admin'),
        // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        // 'remember_token' => Str::random(10),
        'fname' => $faker->firstName,
        'lname' => $faker->lastName,
        'user_role' => 1,
        'user_cin' => 'Ua'.$faker->randomNumber(6),
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'dob' => $faker->date(),
        'doj' => $faker->date(),
        'social_status' => $faker->randomElement(['C', 'M', 'D']),
        'address' => $faker->address,
        'gender' => $faker->randomElement(['M', 'F']),
        'phone' => $faker->e164PhoneNumber,
    ];
});
$factory->define(Department::class, function (Faker $faker) {
    return [
        'dept_name' => $faker->randomElement(['GI','GE','TM','TCC']),
        'dept_desc' => $faker->sentence(6),
        'dept_manager' => $faker->randomElement([1,2,3,4]), // password
    ];
});
$factory->define(Option::class, function (Faker $faker) {
    return [
        'opt_name' => $faker->sentence(2),
        'dept_id' => $faker->randomElement([1,2,3,4]),
        'opt_desc' => $faker->sentence(6),
    ];
});
$factory->define(Semester::class, function (Faker $faker) {
    return [
        'sem_label' => $faker->randomElement(['S1','S2','S3','S4']),
    ];
});
$factory->define(Student::class, function (Faker $faker) {
    return [
        'dept_id' => $faker->randomElement([1,2]),
        'opt_id' => $faker->randomElement([1,2]),
        'sem_id' => $faker->randomElement([1,2,3,4]),
        'std_cne' => 'M'.$faker->randomNumber(9),
        'std_graduated' => $faker->boolean, // password

    ];
});
