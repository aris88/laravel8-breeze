<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Status;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class StatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'identifier' => strtolower(Str::random(32)),
            'body' => $this->faker->sentence(),
        ];
    }

    // buat data dummy setelah membuat factory dengan menjalankan perintah berikut di : php artisan tinker
    // App\Models\User::factory()->hasStatuses(5)->count(10)->create();
}
