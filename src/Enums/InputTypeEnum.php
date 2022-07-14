<?php

namespace Pentangle\LaravelQuestionnaire\Enums;

enum InputTypeEnum: string
{
    case TEXT = 'text';
    case TEXTAREA = 'textarea';
    case RADIO = 'radio';
    case CHECKBOX = 'checkbox';
    case SELECT = 'select';
    case IMAGE = 'image';
    case FILE = 'file';
    case DATE = 'date';
    case DATETIME = 'datetime';
    case TIME = 'time';
    case NUMBER = 'number';
    case PASSWORD = 'password';
    case EMAIL = 'email';
    case URL = 'url';
    case IP = 'ip';
    case COLOR = 'color';

    public static function getValues(): array
    {
        return [
            self::TEXT->value,
            self::TEXTAREA->value,
            self::RADIO->value,
            self::CHECKBOX->value,
            self::SELECT->value,
            self::IMAGE->value,
            self::FILE->value,
            self::DATE->value,
            self::DATETIME->value,
            self::TIME->value,
            self::NUMBER->value,
            self::PASSWORD->value,
            self::EMAIL->value,
            self::URL->value,
            self::IP->value,
            self::COLOR->value,
        ];
    }
}
