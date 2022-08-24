<?php

namespace Pentangle\LaravelQuestionnaire\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Pentangle\LaravelQuestionnaire\Models\Choice;
use Pentangle\LaravelQuestionnaire\Models\Question;

class ChoiceFactory extends Factory
{
    protected $model = Choice::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'question_id' => Question::factory(),
            'extras' => '[]',
            'associated_value' => $this->faker->numberBetween(1, 100),
        ];
    }
}
