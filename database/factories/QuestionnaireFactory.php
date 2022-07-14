<?php

namespace Pentangle\LaravelQuestionnaire\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Pentangle\LaravelQuestionnaire\Enums\InputTypeEnum;
use Pentangle\LaravelQuestionnaire\Models\Questionnaire;

class QuestionnaireFactory extends Factory
{
    protected $model = Questionnaire::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'options' => [
                'Option 1',
                'Option 2',
                'Option 3',
                'Option 4',
            ],
            'type' => InputTypeEnum::RADIO,
        ];
    }
}