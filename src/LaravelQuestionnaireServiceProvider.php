<?php

namespace Pentangle\LaravelQuestionnaire;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Pentangle\LaravelQuestionnaire\Commands\LaravelQuestionnaireCommand;

class LaravelQuestionnaireServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-questionnaire')
            ->hasConfigFile()
            ->hasViews()
            ->hasViewComponent('laravel-questionnaire', 'radio')
            ->hasMigrations([
                'create_questionnaires_table',
                'create_questions_table',
                'create_choices_table',
                'create_responses_table',
                'create_instances_table',
            ])
            ->hasCommand(LaravelQuestionnaireCommand::class);
    }
}
