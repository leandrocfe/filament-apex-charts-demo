<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\BasicLineChart;
use Filament\Pages\Page;

class Line extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-hashtag';

    protected static ?string $navigationGroup = 'Examples';

    protected static string $view = 'filament.pages.line';

    protected function getHeaderWidgets(): array
    {
        return [
            BasicLineChart::class,
        ];
    }
}
