<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * This uses CourseFactory to create 25 Courses in the database.
     * @return void
     */
    public function run()
    {
        Course::factory()->times(25)->create();
    }
}
