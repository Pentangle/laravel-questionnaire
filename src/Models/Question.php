<?php

namespace Pentangle\LaravelQuestionnaire\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use CrudTrait;

    protected $guarded = ['id'];

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
