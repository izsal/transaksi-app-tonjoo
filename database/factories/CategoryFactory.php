<?php

namespace Database\Factories;

use Arr;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        $names = ['Income', 'Expense'];
        return [
            'name' => Arr::random($names),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
