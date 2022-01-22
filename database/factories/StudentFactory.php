<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'dob' => $this->faker->dateTimeBetween($startDate= '-30 years', $endDate='-20 years'),
            'address' => $this->faker->address(),
            'entry_date' => $this->faker->dateTimeBetween($startDate='-4 weeks', $endDate='-2 weeks'),
            'section_no' => $this->faker->numberBetween(1,5),
            'remark' => $this->faker->text(),
        ];
    }
}
