<?php

test('that the enum can return an array', function () {
    $array = \Pentangle\LaravelQuestionnaire\Enums\InputTypeEnum::getValues();
    $this->assertIsArray($array);
    dd($array);
});
