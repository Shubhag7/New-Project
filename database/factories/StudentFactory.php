<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $currentDate = Carbon::now();

        return [
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'gender' => 'M',
            'date_of_birth' => $currentDate,
            'religion' => 'Hindu',
            'roll_no' => Str::random(10),
            'blood_group' => 'A+',
            'class' => 'Play',
            'section' => 'A',
            'email' => Str::random(10).'@gmail.com',
            'address' => Str::random(20),
            'image' => Str::random(20),
        ];
    }
}
