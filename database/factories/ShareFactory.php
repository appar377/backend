<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Integer;

use Illuminate\Support\Str;
use IntlChar;

class ShareFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1,3),
            'share' => $this->faker->text,
        ];
    }
}
