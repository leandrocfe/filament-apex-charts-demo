<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\BasicScatterChart;
use Filament\Pages\Page;

class Scatter extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-hashtag';

    protected static ?string $navigationGroup = 'Examples';

    protected static string $view = 'filament.pages.scatter';

    protected function getHeaderWidgets(): array
    {
        return [
            BasicScatterChart::class,
        ];
    }
}
