<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'room_type' => $this->faker->randomElement(['single', 'double', 'suite', 'family', 'deluxe']),
            'check_in_date' => $this->faker->date(),
            'check_out_date' => $this->faker->date(),
            'total_guests' => $this->faker->numberBetween(-10000, 10000),
            'total_price' => $this->faker->word(),
            'booking_status' => $this->faker->randomElement(['pending', 'confirmed', 'checked_in', 'checked_out', 'cancelled']),
        ];
    }
}
