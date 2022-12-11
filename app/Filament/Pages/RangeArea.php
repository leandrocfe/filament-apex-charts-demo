<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\BasicRangeAreaChart;
use Filament\Pages\Page;

class RangeArea extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-hashtag';

    protected static ?string $navigationGroup = 'Examples';

    protected static string $view = 'filament.pages.range-area';

    protected function getHeaderWidgets(): array
    {
        return [
            BasicRangeAreaChart::class,
        ];
    }
}
