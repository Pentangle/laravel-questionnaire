<?php

namespace Pentangle\LaravelQuestionnaire\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Pentangle\LaravelQuestionnaire\Database\Factories\QuestionFactory;

class Question extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'questionnaire_id',
        'type',
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return QuestionFactory
     */
    protected static function newFactory(): QuestionFactory
    {
        return QuestionFactory::new();
    }

    /**
     * Relationships
     */
    public function choices()
    {
        return $this->hasMany(Choice::class);
    }

    public function questionnaire()
    {
        return $this->belongsTo(Questionnaire::class);
    }
}
