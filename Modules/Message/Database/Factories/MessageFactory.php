<?php

namespace Modules\Message\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Message\App\Models\Message::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}

