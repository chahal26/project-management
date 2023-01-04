<?php

namespace App\Enums;

use Illuminate\Support\Str;

enum TeamEnum: string
{
    case Management = 'management';
    case BackendDevelopment = 'backend_development';
    case FrontendDevelopment = 'frontend_development';
    case GraphicDesigning = 'graphic_designing';
    case DigitalMarketing = 'digital_marketing';

    public static function getAllValues(): array
    {
        return array_map(function($string){
            return Str::headline($string);
        }, array_column(self::cases(), 'name', 'value'));
    }
}
