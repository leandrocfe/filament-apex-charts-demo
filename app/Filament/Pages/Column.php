<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\BasicColumnChart;
use App\Filament\Widgets\ColumnChartWithAnnotations;
use App\Filament\Widgets\GradientColumnChart;
use App\Filament\Widgets\RoundedColumnChart;
use Filament\Pages\Page;

class Column extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-hashtag';

    protected static ?string $navigationGroup = 'Examples';

    protected static string $view = 'filament.pages.column';

    protected function getHeaderWidgets(): array
    {
        return [
            BasicColumnChart::class,
            ColumnChartWithAnnotations::class,
            GradientColumnChart::class,
            RoundedColumnChart::class,
        ];
    }
}
