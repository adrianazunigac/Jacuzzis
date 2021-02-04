<?php

namespace Database\Factories;

use App\Models\Surveys;
use Illuminate\Database\Eloquent\Factories\Factory;

class SurveysFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Surveys::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => Surveys::factory(),
            'name' => $this->faker->name,
            'state' => 1,
            'instructions' => $this->faker->text,

        ];
    }
}
