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

    public function color(): string {
        return match($this) {
            TeamEnum::Management => 'secondary',
            TeamEnum::FrontendDevelopment => 'danger',
            TeamEnum::BackendDevelopment => 'success',
            TeamEnum::DigitalMarketing => 'warning',
            TeamEnum::GraphicDesigning => 'primary',
          };
    }

    public static function getAllValues(): array
    {
        return array_map(function($string){
            return Str::headline($string);
        }, array_column(self::cases(), 'name', 'value'));
    }

    public static function getAllValuesColor(): array
    {
        $withColor = [];

        foreach(self::cases() as $case){
            $withColor[$case->color()] = $case->value;
        }

        return $withColor;
    }
}
