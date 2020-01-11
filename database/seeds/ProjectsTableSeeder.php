<?php

use App\Project;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $projects = [];
        $status = collect(array_keys(Project::STATUS_SELECT));

        foreach(range(1,100) as $id)
        {
            array_push($projects, [
                'id' => $id,
                'name' => $faker->company,
                'status' => $status->random()
            ]);
        }

        Project::insert($projects);
    }
}
