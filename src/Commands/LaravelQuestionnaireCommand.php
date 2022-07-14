<?php

namespace Pentangle\LaravelQuestionnaire\Commands;

use Illuminate\Console\Command;

class LaravelQuestionnaireCommand extends Command
{
    public $signature = 'laravel-questionnaire';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
