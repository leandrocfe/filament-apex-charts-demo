<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\BasicPolarAreaChart;
use Filament\Pages\Page;

class PolarArea extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-hashtag';

    protected static ?string $navigationGroup = 'Examples';

    protected static string $view = 'filament.pages.polar-area';

    protected function getHeaderWidgets(): array
    {
        return [
            BasicPolarAreaChart::class,
        ];
    }
}
