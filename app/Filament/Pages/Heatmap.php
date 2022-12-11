<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\BasicHeatmapChart;
use Filament\Pages\Page;

class Heatmap extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-hashtag';

    protected static ?string $navigationGroup = 'Examples';

    protected static string $view = 'filament.pages.heatmap';

    protected function getHeaderWidgets(): array
    {
        return [
            BasicHeatmapChart::class,
        ];
    }
}
