<?php

namespace Pentangle\LaravelQuestionnaire\Models;

use Illuminate\Database\Eloquent\Model;

class Instance extends Model
{
    /**
     * Instance is the glue that binds the responses to the questions.
     **/

    protected $guarded = ['id'];

    /**
     * Relationships
     */

    /**
     * The polymorphic class of the model that has answered the question.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function questionable(): \Illuminate\Database\Eloquent\Relations\MorphTo
    {
        return $this->morphTo();
    }

    public function responses(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Response::class);
    }

    /**
     * Accessors
     */

}