<?php

namespace Pentangle\LaravelQuestionnaire;

use Pentangle\LaravelQuestionnaire\Models\Instance;
use Pentangle\LaravelQuestionnaire\Models\Question;
use Pentangle\LaravelQuestionnaire\Models\Response;

trait QuestionableTrait
{
    public function instances()
    {
        return $this->morphMany(Instance::class, 'questionable');
    }

    public function respondToQuestion(Instance $instance, Question $question, Response $response)
    {
        $instance->responses()->save($response);
    }
}
