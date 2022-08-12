<?php

namespace Pentangle\LaravelQuestionnaire\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Pentangle\LaravelQuestionnaire\Enums\InputTypeEnum;
use Pentangle\LaravelQuestionnaire\Models\Question;
use Pentangle\LaravelQuestionnaire\Models\Questionnaire;

class QuestionFactory extends Factory
{
    protected $model = Question::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'type' => InputTypeEnum::RADIO,
            'questionnaire_id' => 1,
        ];
    }
}
