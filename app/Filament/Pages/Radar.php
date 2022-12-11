<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\BasicRadarChart;
use Filament\Pages\Page;

class Radar extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-hashtag';

    protected static ?string $navigationGroup = 'Examples';

    protected static string $view = 'filament.pages.radar';

    protected function getHeaderWidgets(): array
    {
        return [
            BasicRadarChart::class,
        ];
    }
}
