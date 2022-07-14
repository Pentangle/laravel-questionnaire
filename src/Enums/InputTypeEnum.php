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

    public function getValues(): array
    {
        return [
            self::TEXT,
            self::TEXTAREA,
            self::RADIO,
            self::CHECKBOX,
            self::SELECT,
            self::IMAGE,
            self::FILE,
            self::DATE,
            self::DATETIME,
            self::TIME,
            self::NUMBER,
            self::PASSWORD,
            self::EMAIL,
            self::URL,
            self::IP,
            self::COLOR,
        ];
    }
}
