<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nome"=> $this->faker->name,
            "movil"=> $this->faker->phoneNumber,
            "email"=> $this->faker->email,
            "password"=> Hash::make("password"),
            "estado"=> $this->faker->boolean(90),
            "rol"=> $this->faker->randomElement(['admin', 'vendedor']),
            "ciudad_id" => 1
        ];
    }
}
