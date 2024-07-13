<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ItemMaster>
 */
class ItemMasterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ItemCode'=> $this->faker->postcode(),
            'ItemName'=> $this->faker->paragraph(),
            'PurchasePrice'=> $this->faker->numberBetween($min = 200, $max = 300),
            'SellingPrice'=> $this->faker->numberBetween($min = 300, $max = 400),
            'void'=> 1,
        ];
    }
}
