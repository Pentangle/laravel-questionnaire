<?php

namespace Pentangle\LaravelQuestionnaire\Models;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $guarded = ['id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function question(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    public function instance(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Instance::class);
    }

    /**
     * Accessors
     */

    /**
     * return the choice or verbose value of the response.
     * @return void
     */
    public function getAsStringAttribute(): string
    {
        return $this->choice_id ? $this->choice->name : $this->value;
    }
}
