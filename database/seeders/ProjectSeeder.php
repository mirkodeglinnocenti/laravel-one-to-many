<?php

namespace Database\Seeders;

use App\Models\Project;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++) {

            $proj = new Project();

            $proj->title = $faker->unique()->sentence($faker->numberBetween(1, 6));
            $proj->slug = Str::of($proj->title)->slug('-');
            $proj->description = $faker->sentence($faker->numberBetween(15, 120));
            $proj->url = $faker->url();

            $proj->save();
        }
    }
}
