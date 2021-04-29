<?php

namespace Database\Factories;

use App\Models\RendezVous;
use Illuminate\Database\Eloquent\Factories\Factory;

class RendezVousFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RendezVous::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [

            'date_rendezvous' => $this->faker->dateTimeBetween("-3days", "+3days")
        ];
    }
}
