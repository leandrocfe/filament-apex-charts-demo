<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\BasicBarChart;
use Filament\Pages\Page;

class Bar extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-hashtag';

    protected static ?string $navigationGroup = 'Examples';

    protected static string $view = 'filament.pages.bar';

    protected function getHeaderWidgets(): array
    {
        return [
            BasicBarChart::class,
        ];
    }
}
