<?php

namespace Database\Factories;

use App\Models\Channel;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChannelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Channel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'avatar_src' => 'http://via.placeholder.com/80x80',
            'title' => $this->faker->name,
            'description' => $this->faker->text($maxNbChars = 200),
            'likes' => $this->faker->numberBetween(0, 1000000000),
            'category_channel' => $this->faker->randomElement(['gamings', 'streaming', 'actuality', 'flashinfo']),
        ];
    }
}

