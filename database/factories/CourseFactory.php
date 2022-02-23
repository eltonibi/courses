<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * @return array
     */
    public function definition()
    {
        return [
            'title'        =>    $this->faker->sentences(1, true),
            'description'  =>    $this->faker->sentences(4, true),
            'is_premium'   =>    $this->faker->boolean(),
        ];
    }
}
