<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\BasicRadialBarChart;
use App\Filament\Widgets\GradientCircleChart;
use Filament\Pages\Page;

class Radialbar extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-hashtag';

    protected static ?string $navigationGroup = 'Examples';

    protected static string $view = 'filament.pages.radialbar';

    protected function getHeaderWidgets(): array
    {
        return [
            BasicRadialBarChart::class,
            GradientCircleChart::class,
        ];
    }
}
