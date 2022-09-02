<?php

namespace Pentangle\LaravelQuestionnaire;

use Pentangle\LaravelQuestionnaire\Models\Choice;
use Pentangle\LaravelQuestionnaire\Models\Instance;
use Pentangle\LaravelQuestionnaire\Models\Response;

trait QuestionableTrait
{
    public function createNewInstance(): int
    {
        //if not logged in show error message
        if (!auth()->check()) {
            throw new \Exception('You must be logged in to create a new instance');
        }
        return $this->instances()->create([
            'user_id' => auth()->id(),
        ])->id;
    }

    public function instances()
    {
        return $this->morphMany(Instance::class, 'participant');
    }

    public function respondToQuestion(Instance $instance = null, Choice $choice = null, string $text = '')
    {
        $instance->responses()->create([
            'text' => $text,
            'choice_id' => $choice?->id,
        ]);
    }
}
