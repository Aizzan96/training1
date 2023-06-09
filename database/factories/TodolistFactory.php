<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todolist>
 */
class TodolistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'title'=> $this->faker->sentence(6),
           'due_date'=> now(),
           'user_id'=>rand(1,100),
           'description'=>$this->faker->paragraph(6),
           'status'=>rand(0,1),
        ];
    }
}
