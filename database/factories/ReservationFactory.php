<?php

namespace Database\Factories;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reservation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->unique()->randomNumber(),
            'nom_passager' => $this->faker->name,
            'email_passager' => $this->faker->unique()->safeEmail,
            'numero_billet' => $this->faker->unique()->bothify('??##??##'),
            'date_reservation' => now(),
        ];
    }
}
