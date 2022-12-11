<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\BasicCandlestickChart;
use Filament\Pages\Page;

class Candlestick extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-hashtag';

    protected static ?string $navigationGroup = 'Examples';

    protected static string $view = 'filament.pages.candlestick';

    protected function getHeaderWidgets(): array
    {
        return [
            BasicCandlestickChart::class,
        ];
    }
}
