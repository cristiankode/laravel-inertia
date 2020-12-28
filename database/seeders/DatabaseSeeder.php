<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
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
        User::factory()->create([
            "name" => "desarrolloweb",
            "email" => "app@cursosdesarrolloweb.com",
            "password" => bcrypt("password"),
        ]);

        User::factory()->create([
            "name" => "youtube",
            "email" => "youtube@cursosdesarrolloweb.com",
            "password" => bcrypt("password"),
        ]);

        Project::factory(200)->create();
    }
}
