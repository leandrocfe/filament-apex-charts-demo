<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\BasicBoxPlotChart;
use Filament\Pages\Page;

class Boxplot extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-hashtag';

    protected static ?string $navigationGroup = 'Examples';

    protected static string $view = 'filament.pages.boxplot';

    protected function getHeaderWidgets(): array
    {
        return [
            BasicBoxPlotChart::class,
        ];
    }
}
