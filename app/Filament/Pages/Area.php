<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\BasicAreaChart;
use Filament\Pages\Page;

class Area extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-hashtag';

    protected static ?string $navigationGroup = 'Examples';

    protected static string $view = 'filament.pages.area';

    protected function getHeaderWidgets(): array
    {
        return [
            BasicAreaChart::class,
        ];
    }
}
