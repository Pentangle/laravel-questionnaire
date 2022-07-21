<?php

namespace Pentangle\LaravelQuestionnaire\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Pentangle\LaravelQuestionnaire\Database\Factories\QuestionnaireFactory;


class Questionnaire extends Model
{
    use CrudTrait;
    use HasFactory;

    /**
     * Create a new factory instance for the model.
     *
     * @return QuestionnaireFactory
     */
    protected static function newFactory(): QuestionnaireFactory
    {
        return QuestionnaireFactory::new();
    }

    public function questions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Question::class);
    }
}
