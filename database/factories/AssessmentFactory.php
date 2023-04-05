<?php

namespace Database\Factories;

use App\Models\Assessment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assessment>
 */
class AssessmentFactory extends Factory
{
    protected $model = Assessment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $scoreOver = $this->faker->randomElement([20, 40, 100]);
        return [
            'assessment_name' => $this->faker->randomElement(['homework1', 'classtest1', 'finalexams']),
            'score' => $this->faker->numberBetween(0, $scoreOver),
            'score_over' => $scoreOver,
        ];
    }
}
