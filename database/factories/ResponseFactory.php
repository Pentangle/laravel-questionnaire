<?php

namespace Pentangle\LaravelQuestionnaire\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Pentangle\LaravelQuestionnaire\Enums\InputTypeEnum;
use Pentangle\LaravelQuestionnaire\Models\Choice;
use Pentangle\LaravelQuestionnaire\Models\Instance;
use Pentangle\LaravelQuestionnaire\Models\Question;
use Pentangle\LaravelQuestionnaire\Models\Questionnaire;

class ResponseFactory extends Factory
{
    protected $model = Question::class;

    public function definition()
    {
        return [
            'text' => $this->faker->text,
            'choice_id' => Choice::factory()->create()->id,
            'instance_id' => Instance::factory()->create()->id,
        ];
    }
}
