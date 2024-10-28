<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class TaskFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user_ids = \App\Models\User::pluck('id')->toArray();
        $category_ids = \App\Models\Category::pluck('id')->toArray();

        $creation_date = fake()->dateTimeBetween($startDate = '-10 days', $endDate = 'now')->format("Y-m-d");
        $dt = new \Datetime($creation_date);
        $dt->add(\DateInterval::createFromDateString('10 day'));
        $execution_date = fake()->dateTimeBetween($startDate = $creation_date, $endDate = $dt)->format("Y-m-d");
        return [
            'name' => fake()->word(),
            'description' => fake()->paragraph(1),
            'category_id' => fake()->randomElement($category_ids),
            'user_id' => fake()->randomElement($user_ids),
            'creation_date' => $creation_date,
            'execution_date' => $execution_date,
            'status' => fake()->randomElement(['IN_PROGRESS', 'DONE']),
        ];
    }
}
