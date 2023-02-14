<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'username' => $this->faker->unique()->userName(),
            // 'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password
            'no_hp' => Str::random(12),
            'role' => Arr::random(['admin', 'pemohon', 'verifikator berkas', 'verifikator lapangan', 'pemberi rekomendasi']),
            'status_users' => Arr::random(['aktif', 'tidak aktif']),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
