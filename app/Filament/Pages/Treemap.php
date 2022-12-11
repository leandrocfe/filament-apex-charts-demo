<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\BasicTreemapChart;
use Filament\Pages\Page;

class Treemap extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-hashtag';

    protected static ?string $navigationGroup = 'Examples';

    protected static string $view = 'filament.pages.treemap';

    protected function getHeaderWidgets(): array
    {
        return [
            BasicTreemapChart::class,
        ];
    }
}
