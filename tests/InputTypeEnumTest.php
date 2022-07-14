<?php

test('that the enum can return an array', function () {
    $array = \Pentangle\LaravelQuestionnaire\Enums\InputTypeEnum::cases();
    $this->assertIsArray($array);
});