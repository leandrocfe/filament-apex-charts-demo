<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\BasicDonutChart;
use App\Filament\Widgets\BasicPieChart;
use Filament\Pages\Page;

class Pie extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-hashtag';

    protected static ?string $navigationGroup = 'Examples';

    protected static string $view = 'filament.pages.pie';

    protected function getHeaderWidgets(): array
    {
        return [
            BasicPieChart::class,
            BasicDonutChart::class,
        ];
    }
}
